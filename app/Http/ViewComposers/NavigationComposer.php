<?php 
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Backend_navs as Navs;

class NavigationComposer{

    protected $navs;

     public function __construct(Navs $navs)
    {
        // Dependencies automatically resolved by service container...
        $this->navs = $navs;
    }

    private function renderNav($result=[],$rnav=null){
        if(is_null($rnav))
            $rnav=$this->navs->where('_active',1)->get();
                
        if($rnav){
            foreach($rnav as $nav){
                if($nav->has_child==1){
                    $rchild=$this->navs->where('_active',1)->where('parent',$nav->id)->get();
                    $nav->child=$this->renderNav($result,$rchild);
                }else{
                    $nav->child=null;
                }
                $result[]=$nav;
            }
        }
        return $result;
    }

    public function compose(View $view){
        $view->with('_navs',$this->renderNav());
    }
}