<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="#">Karmakara <small>erp v1.1</small></a>
          
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                        array('label'=>'Dashboard', 'url'=>array('/site/index')),
                        array('label'=>'Inventory Management <span class="caret"></span>', 'url'=>array('/product/admin'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(                 
                                            array('label'=>'Products <span class="badge badge-info pull-right">'.Product::model()->count().'</span>', 'url'=>'/product/admin'),
                                            array('label'=>'Locations <span class="badge badge-info pull-right">'.Location::model()->count().'</span>', 'url'=>'/location/admin'),
                             array('label'=>'Racks <span class="badge badge-info pull-right">'.Rack::model()->count().'</span>', 'url'=>'/location/admin'),
                             array('label'=>'Warehouse <span class="badge badge-info pull-right">'.Warehouse::model()->count().'</span>', 'url'=>'/location/admin'),
                                                        array('label'=>'Add Location', 'url'=>'/location/create'),
							array('label'=>'Add Rack', 'url'=>'/rack/create'),
                            array('label'=>'Add Product', 'url'=>'/rack/create'),
                            )),
                        array('label'=>'Purchase Management <span class="caret"></span>', 'url'=>array('/purchase/admin'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(                 array('label'=>'Quotes <span class="badge badge-info pull-right">'.Quote::model()->countByAttributes(array('status'=>0)).'</span>', 'url'=>'/quote/admin'),
							array('label'=>'Purchase <span class="badge badge-info pull-right">'.Po::model()->countByAttributes(array('status'=>0)).'</span>', 'url'=>'/po/admin'),
                                                        array('label'=>'Create Quote', 'url'=>'/quote/create'),
                                                        array('label'=>'Create Vendor', 'url'=>'/vendor/create'),
                                                        array('label'=>'Receive', 'url'=>'/po_receive/admin'),
                            )),
                      
                         array('label'=>'My Account <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                         
							
							
							 array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),

                        )),
                        
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>

<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
        
        	
           <form class="navbar-search pull-right" action="">
           	 
           <input type="text" class="search-query span2" placeholder="Search">
           
           </form>
    	</div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->