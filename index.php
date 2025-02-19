<?php 
session_start();
if($_SESSION['user'] == false && $_SESSION['email'] == false){
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>File Manager</title>
	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <div class="view-account">
        <section class="module">
            <div class="module-inner">
                <div class="side-bar">
                    <div class="user-info">
                        <img class="img-profile img-circle img-responsive center-block" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                        <ul class="meta list list-unstyled">
                            <li class="name">Rebecca Sanders
                                <label class="label label-info">UX Designer</label>
                            </li>
                            <li class="email"><a href="#">Rebecca.S@website.com</a></li>
                            <li class="activity">Last logged in: Today at 2:18pm</li>
                        </ul>
                    </div>
                    <nav class="side-menu">
                        <ul class="nav">
                            <li><a href="#"><span class="fa fa-user"></span> Profile</a></li>
                            <li><a href="#"><span class="fa fa-cog"></span> Settings</a></li>
                            <li class="active"><a href="#"><span class="fa fa-credit-card"></span> Billing</a></li>
                            <li><a href="#"><span class="fa fa-envelope"></span> Messages</a></li>

                            <li><a href="user-drive.html"><span class="fa fa-th"></span> Drive</a></li>
                            <li><a href="#"><span class="fa fa-clock-o"></span> Reminders</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="content-panel">
                    <div class="content-header-wrapper">
                        <h2 class="title">My Drive</h2>
                        <div class="actions">
                            <button class="btn btn-success"><i class="fa fa-plus"></i> Upload New Item</button>
                        </div>
                    </div>
                    <div class="content-utilities">
                        <div class="page-nav">
                            <span class="indicator">View:</span>
                            <div class="btn-group" role="group">
                                <button class="active btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Grid View" id="drive-grid-toggle"><i class="fa fa-th-large"></i></button>
                                <button class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="List View" id="drive-list-toggle"><i class="fa fa-list-ul"></i></button>
                            </div>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false">All Items <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-file"></i> Documents</a></li>
                                    <li><a href="#"><i class="fa fa-file-image-o"></i> Images</a></li>
                                    <li><a href="#"><i class="fa fa-file-video-o"></i> Media Files</a></li>
                                    <li><a href="#"><i class="fa fa-folder"></i> Folders</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false"><i class="fa fa-filter"></i> Sorting <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Newest first</a></li>
                                    <li><a href="#">Oldest first</a></li>
                                </ul>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></button>
                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Archive"><i class="fa fa-archive"></i></button>

                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Report spam"><i class="fa fa-exclamation-triangle"></i></button>
                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="drive-wrapper drive-grid-view">
                        <div class="grid-items-wrapper">
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Meeting Notes.txt</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-text-o text-primary"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Stock Image DC3214.JPG</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Deck Lorem Ipsum.ppt</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-powerpoint-o text-warning"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Project Tasks.csv</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-excel-o text-success"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Project Brief.pdf</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-pdf-o text-danger"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Image DS1341.JPG</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Image DS3214.JPG</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">UX Resource</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-folder text-primary"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Prototypes</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-folder text-primary"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Sketch-source-files.zip</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-zip-o text-primary"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Quisque.doc</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-word-o text-info"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Aenean imperdiet.doc</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-word-o text-info"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">demo.html</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-code-o text-primary"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Image DS2314.JPG</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="drive-wrapper drive-list-view">
                        <div class="table-responsive drive-items-table-wrapper">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="type"></th>
                                        <th class="name truncate">Name</th>
                                        <th class="date">Uploaded</th>
                                        <th class="size">Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-text-o text-primary"></i></td>
                                        <td class="name truncate"><a href="#">Meeting Notes.txt</a></td>
                                        <td class="date">Sep 23, 2015</td>
                                        <td class="size">18 KB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-image-o text-primary"></i></td>
                                        <td class="name truncate"><a href="#">Stock Image DC3214.JPG</a></td>
                                        <td class="date">Sep 21, 2015</td>
                                        <td class="size">235 MB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-powerpoint-o text-warning"></i></td>
                                        <td class="name truncate"><a href="#">Deck Lorem Ipsum.ppt</a></td>
                                        <td class="date">Sep 20, 2015</td>
                                        <td class="size">136 MB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-excel-o text-success"></i></td>
                                        <td class="name truncate"><a href="#">Project Tasks.csv</a></td>
                                        <td class="date">Aug 16, 2015</td>
                                        <td class="size">32 KB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-pdf-o text-warning"></i></td>
                                        <td class="name truncate"><a href="#">Project Brief.pdf</a></td>
                                        <td class="date">Aug 15, 2015</td>
                                        <td class="size">73 MB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-image-o text-primary"></i></td>
                                        <td class="name truncate"><a href="#">Image DS1341.JPG</a></td>
                                        <td class="date">Aug 15, 2015</td>
                                        <td class="size">171 MB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-image-o text-primary"></i></td>
                                        <td class="name truncate"><a href="#">Image DS3214.JPG</a></td>
                                        <td class="date">Aug 15, 2015</td>
                                        <td class="size">171 MB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-folder text-primary"></i></td>
                                        <td class="name truncate"><a href="#">UX Resource</a></td>
                                        <td class="date">Feb 07, 2015</td>
                                        <td class="size">--</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-folder text-primary"></i></td>
                                        <td class="name truncate"><a href="#">Prototypes</a></td>
                                        <td class="date">Jan 03, 2015</td>
                                        <td class="size">--</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-word-o text-info"></i></td>
                                        <td class="name truncate"><a href="#">Quisque.doc</a></td>
                                        <td class="date">Oct 21, 2014</td>
                                        <td class="size">27 KB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-word-o text-info"></i></td>
                                        <td class="name truncate"><a href="#">Aenean imperdiet.doc</a></td>
                                        <td class="date">Oct 16, 2014</td>
                                        <td class="size">23 KB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-code-o text-primary"></i></td>
                                        <td class="name truncate"><a href="#">demo.html</a></td>
                                        <td class="date">Aug 23, 2014</td>
                                        <td class="size">10 KB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-image-o text-success"></i></td>
                                        <td class="name truncate"><a href="#">Image DS2314.JPG</a></td>
                                        <td class="date">Aug 06, 2014</td>
                                        <td class="size">325 MB</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>