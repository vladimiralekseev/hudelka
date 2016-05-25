<?php
use yii\bootstrap\Nav;
use webvimark\modules\UserManagement\components\GhostMenu;
use webvimark\modules\UserManagement\UserManagementModule;
use webvimark\modules\UserManagement\models\User;
?>
<aside class="main-sidebar">

    <section class="sidebar">
<?/*?>
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce </p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
<?*/?>
<?


//User::hasPermission($permission, $superAdminAllowed = true)
//User::canRoute($route, $superAdminAllowed = true)


$menu = [];
$visibleAdmin = User::hasRole(['Admin']);

//$menu[] = '<li class="header">' . \Yii::t('back', 'Content') . '</li>';
$menu = array_merge($menu, [ 

	['label'=>'<span class="glyphicon glyphicon-modal-window"></span> Заказы', 'url'=>['/orders/index'], 'visible' => true],
	['label'=>'<span class="glyphicon glyphicon-modal-window"></span> Обратный звонок', 'url'=>['/orders-call/index'], 'visible' => true],
	['label'=>'<span class="glyphicon glyphicon-modal-window"></span> Расход/Приход', 'url'=>['/spending/index'], 'visible' => true],
	['label'=>'<span class="glyphicon glyphicon-modal-window"></span> Коментарии', 'url'=>['/comments/index'], 'visible' => true],
	['label'=>'<span class="glyphicon glyphicon-modal-window"></span> Статьи', 'url'=>['/articles/index'], 'visible' => true],
	
]); 


$menu[] = '<li class="header">Настройки</li>';
$menu = array_merge($menu, [
	//['label'=>'Login', 'url'=>['/user-management/auth/login'], 'visible' => Yii::$app->user->isGuest],
	//['label'=>'<span class="fa fa-file-code-o"></span> Registration', 'url'=>['/user-management/auth/registration'], 'visible' => Yii::$app->user->isGuest],
	['label'=>'<span class="fa fa-dashboard"></span> Смена пароля', 'url'=>['/user-management/auth/change-own-password']],
	//['label'=>'<span class="fa fa-file-code-o"></span>Password recovery', 'url'=>['/user-management/auth/password-recovery']],
	//['label'=>'<span class="fa fa-envelope"></span> , 'url'=>['/user-management/auth/confirm-email']],
	['label'=>'<span class="glyphicon glyphicon-lock"></span> Выйти', 'url'=>['/user-management/auth/logout']],
]);


	$menu[] = '<li class="header">Настройки пользователя</li>';
	$umm = UserManagementModule::menuItems();
	$menu = array_merge($menu, $umm);

?>
        <?=
        Nav::widget(
            [
                'encodeLabels' => false,
                'options' => ['class' => 'sidebar-menu'],
                /*'items' => [
                    '<li class="header">Menu Yii2</li>',
                    ['label' => '<span class="fa fa-file-code-o"></span> Gii', 'url' => ['/gii']],
                    ['label' => '<span class="fa fa-dashboard"></span> Debug', 'url' => ['/debug']],
                    [
                        'label' => '<span class="glyphicon glyphicon-lock"></span> Sing in', //for basic
                        'url' => ['/site/login'],
                        'visible' =>Yii::$app->user->isGuest
                    ],
                ],*/
            	 'items'=>$menu
            ]
        );
        
/*
echo GhostMenu::widget([
    'encodeLabels'=>false,
    'activateParents'=>true,
    'items' => [
        [
            'label' => 'Backend routes',
            'items'=>UserManagementModule::menuItems()
        ],
        [
            'label' => 'Frontend routes',
            'items'=>[
                ['label'=>'Login', 'url'=>['/user-management/auth/login'], 'visible' => Yii::$app->user->isGuest],
                ['label'=>'Logout', 'url'=>['/user-management/auth/logout']],
                ['label'=>'Registration', 'url'=>['/user-management/auth/registration']],
                ['label'=>'Change own password', 'url'=>['/user-management/auth/change-own-password']],
                ['label'=>'Password recovery', 'url'=>['/user-management/auth/password-recovery']],
                ['label'=>'E-mail confirmation', 'url'=>['/user-management/auth/confirm-email']],
            ],
        ],
    ],
]);
        ?>

        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Same tools</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \yii\helpers\Url::to(['/gii']) ?>"><span class="fa fa-file-code-o"></span> Gii</a>
                    </li>
                    <li><a href="<?= \yii\helpers\Url::to(['/debug']) ?>"><span class="fa fa-dashboard"></span> Debug</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
<?*/	?>
    </section>

</aside>
