<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheading</small>
                        </h1>


                        <?php 
                        
                        // $user = new User();

                        // $user->username = "Gupud";
                        // $user->password = "gupots";
                        // $user->first_name = "Cookies";
                        // $user->last_name = "Cream";

                        // $user->create();


                        // $user = User::find_user_by_id(7);
                        // $user->username = "CaptainKidd";
                        // $user->password = "wapping24";
                        // $user->first_name = "Tower";
                        // $user->last_name = "Hamlets";
                        // $user->update();


                        //  $user = User::find_user_by_id(2);
                        //  $user->delete();

                        // $user = User::find_user_by_id(5);
                        // $user->password = "butterandsalt";
                        // $user->save();


                        // $user = new User();
                        // $user->username = "MALTESERS";
                        // $user->save(); 


                        $users = User::find_all();

                        foreach($users as $user) {
                            echo $user->username;
                        }
        

                        
                        ?>


                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->