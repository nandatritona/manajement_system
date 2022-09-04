<script src="<?= base_url() ?>global_assets/js/plugins/ui/moment/moment.min.js"></script>
<script src="<?= base_url() ?>global_assets/js/plugins/ui/fullcalendar/fullcalendar.min.js"></script>
<script src="<?= base_url() ?>global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>
<script src="<?= base_url() ?>global_assets/js/demo_pages/timelines.js"></script>

<!-- Timeline -->
<div class="timeline timeline-center">
    <div class="timeline-container">

        <!-- Sales stats -->
        <div class="timeline-row">
            <div class="timeline-icon">
                <a href="#"><img src="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg" alt=""></a>
            </div>

            <div class="panel panel-flat timeline-content">
                <div class="panel-heading">
                    <h6 class="panel-title text-semibold">Daily statistics</h6>
                    <div class="heading-elements">
                        <span class="heading-text"><i class="icon-history position-left text-success"></i> Updated 3 hours ago</span>

                        <ul class="icons-list">
                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="daily_stats"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /sales stats -->


        <!-- Blog post -->
        <div class="timeline-row">
            <div class="timeline-icon">
                <img src="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg" alt="">
            </div>

            <div class="timeline-time">
                <a href="#">Margo</a> added a new post
                <span class="text-muted">49 minutes ago</span>
            </div>

            <div class="panel panel-flat timeline-content">
                <div class="panel-heading">
                    <h6 class="panel-title">Himalayan sunset</h6>
                    <div class="heading-elements">
                        <span class="heading-text"><i class="icon-checkmark-circle position-left text-success"></i> 49 minutes ago</span>
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-arrow-down12"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
                                    <li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
                                    <li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
                                    <li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <a href="#" class="display-block content-group">
                        <img src="<?= base_url() ?>global_assets/images/placeholders/cover.jpg" class="img-responsive content-group" alt="">
                    </a>

                    <h6 class="content-group">
                        <i class="icon-comment-discussion position-left"></i>
                        <a href="#">Jason Ansley</a> commented:
                    </h6>

                    <blockquote>
                        <p>When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.</p>
                        <footer>Jason, <cite title="Source Title">10:39 am</cite></footer>
                    </blockquote>
                </div>

                <div class="panel-footer panel-footer-transparent">
                    <div class="heading-elements">
                        <ul class="list-inline list-inline-condensed heading-text">
                            <li><a href="#" class="text-default"><i class="icon-eye4 position-left"></i> 438</a></li>
                            <li><a href="#" class="text-default"><i class="icon-comment-discussion position-left"></i> 71</a></li>
                        </ul>

                        <span class="heading-btn pull-right">
                            <a href="#" class="btn btn-link">Read post <i class="icon-arrow-right14 position-right"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /blog post -->


        <div class="timeline-date text-muted">Yesterday</div>


        <!-- Messages -->
        <div class="timeline-row post-even">
            <div class="timeline-icon">
                <div class="bg-info-400">
                    <i class="icon-comment-discussion"></i>
                </div>
            </div>

            <div class="timeline-time">
                <a href="#">Lucy</a> sent you a message
                <span class="text-muted">29 minutes ago</span>
            </div>

            <div class="panel panel-flat timeline-content">
                <div class="panel-heading">
                    <h6 class="panel-title">Conversation with James</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-circle-down2"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
                                    <li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
                                    <li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
                                    <li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <ul class="media-list chat-list content-group">
                        <li class="media date-step">
                            <span>Today</span>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg">
                                    <img src="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg" class="img-circle img-md" alt="">
                                </a>
                            </div>

                            <div class="media-body">
                                <div class="media-content">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
                                <span class="media-annotation display-block mt-10">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                            </div>
                        </li>

                        <li class="media reversed">
                            <div class="media-body">
                                <div class="media-content">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
                                <span class="media-annotation display-block mt-10">2 hours ago <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                            </div>

                            <div class="media-right">
                                <a href="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg">
                                    <img src="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg" class="img-circle img-md" alt="">
                                </a>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg">
                                    <img src="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg" class="img-circle img-md" alt="">
                                </a>
                            </div>

                            <div class="media-body">
                                <div class="media-content">Grunted smirked and grew less but rewound much despite and impressive via alongside out and gosh easy manatee dear ineffective yikes.</div>
                                <span class="media-annotation display-block mt-10">13 minutes ago <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                            </div>
                        </li>

                        <li class="media reversed">
                            <div class="media-body">
                                <div class="media-content"><i class="icon-menu display-block"></i></div>
                            </div>

                            <div class="media-right">
                                <a href="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg">
                                    <img src="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg" class="img-circle img-md" alt="">
                                </a>
                            </div>
                        </li>
                    </ul>

                    <textarea name="enter-message" class="form-control content-group" rows="3" cols="1" placeholder="Enter your message..."></textarea>

                    <div class="row">
                        <div class="col-xs-6">
                            <ul class="icons-list icons-list-extended mt-10">
                                <li><a href="#" data-popup="tooltip" title="Send photo" data-container="body"><i class="icon-file-picture"></i></a></li>
                                <li><a href="#" data-popup="tooltip" title="Send video" data-container="body"><i class="icon-file-video"></i></a></li>
                                <li><a href="#" data-popup="tooltip" title="Send file" data-container="body"><i class="icon-file-plus"></i></a></li>
                            </ul>
                        </div>

                        <div class="col-xs-6 text-right">
                            <button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-circle-right2"></i></b> Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /messages -->


        <!-- Video post -->
        <div class="timeline-row">
            <div class="timeline-icon">
                <img src="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg" alt="">
            </div>

            <div class="timeline-time">
                <a href="#">Will</a> uploaded a video
                <span class="text-muted">1 hour ago</span>
            </div>

            <div class="panel panel-flat timeline-content">
                <div class="panel-heading">
                    <h6 class="panel-title">Peru mountains</h6>
                    <div class="heading-elements">
                        <span class="heading-text"><i class="icon-checkmark-circle position-left text-success"></i> Today, 8:39 am</span>
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-arrow-down12"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
                                    <li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
                                    <li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
                                    <li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <p class="content-group">Cutting much goodness more from sympathetic unwittingly under wow affluent luckily or distinctly demonstrable strewed lewd outside coaxingly and after and rational alas this fitted. Hippopotamus noticeably oh bridled more until dutiful.</p>

                    <div class="video-container">
                        <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126945693?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- /video post -->


        <!-- Task -->
        <div class="timeline-row post-even">
            <div class="timeline-icon">
                <img src="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg" alt="">
            </div>

            <div class="timeline-time">
                <a href="#">Sophie</a> added a new task
                <span class="text-muted">2 hours ago</span>
            </div>

            <div class="timeline-content">
                <div class="panel border-left-lg border-left-primary">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 class="no-margin-top"><a href="task_manager_detailed.html">#24. Create UI design model</a></h6>
                                <p class="mb-15">One morning, when Gregor Samsa woke from troubled..</p>

                                <a href="#"><img src="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                <a href="#"><img src="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                <a href="#"><img src="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                <a href="#" class="text-default">&nbsp;<i class="icon-plus22"></i></a>
                            </div>

                            <div class="col-md-4">
                                <ul class="list task-details">
                                    <li>28 January, 2015</li>
                                    <li class="dropdown">
                                        Priority: &nbsp; 
                                        <a href="#" class="label label-primary dropdown-toggle" data-toggle="dropdown">Normal <span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><span class="status-mark position-left bg-danger"></span> Highest priority</a></li>
                                            <li><a href="#"><span class="status-mark position-left bg-info"></span> High priority</a></li>
                                            <li class="active"><a href="#"><span class="status-mark position-left bg-primary"></span> Normal priority</a></li>
                                            <li><a href="#"><span class="status-mark position-left bg-success"></span> Low priority</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Eternity app</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer panel-footer-condensed">
                        <div class="heading-elements">
                            <span class="heading-text">Due: <span class="text-semibold">23 hours</span></span>

                            <ul class="list-inline list-inline-condensed heading-text pull-right">
                                <li class="dropdown">
                                    <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Open <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="active"><a href="#">Open</a></li>
                                        <li><a href="#">On hold</a></li>
                                        <li><a href="#">Resolved</a></li>
                                        <li><a href="#">Closed</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Dublicate</a></li>
                                        <li><a href="#">Invalid</a></li>
                                        <li><a href="#">Wontfix</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-alarm-add"></i> Check in</a></li>
                                        <li><a href="#"><i class="icon-attachment"></i> Attach screenshot</a></li>
                                        <li><a href="#"><i class="icon-rotate-ccw2"></i> Reassign</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-pencil7"></i> Edit task</a></li>
                                        <li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel border-left-lg border-left-danger">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 class="no-margin-top"><a href="task_manager_detailed.html">#23. New icons set for an iOS app</a></h6>
                                <p class="mb-15">A collection of textile samples lay spread out on the table..</p>

                                <a href="#"><img src="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                <a href="#"><img src="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                <a href="#" class="text-default">&nbsp;<i class="icon-plus22"></i></a>
                            </div>

                            <div class="col-md-4">
                                <ul class="list task-details">
                                    <li>20 January, 2015</li>
                                    <li class="dropdown">
                                        Priority: &nbsp; 
                                        <a href="#" class="label label-danger dropdown-toggle" data-toggle="dropdown">Highest <span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="active"><a href="#"><span class="status-mark position-left bg-danger"></span> Highest priority</a></li>
                                            <li><a href="#"><span class="status-mark position-left bg-info"></span> High priority</a></li>
                                            <li><a href="#"><span class="status-mark position-left bg-primary"></span> Normal priority</a></li>
                                            <li><a href="#"><span class="status-mark position-left bg-success"></span> Low priority</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Eternity app</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer panel-footer-condensed">
                        <div class="heading-elements">
                            <span class="heading-text">Due: <span class="text-semibold">18 hours</span></span>

                            <ul class="list-inline list-inline-condensed heading-text pull-right">
                                <li class="dropdown">
                                    <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">On hold <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Open</a></li>
                                        <li class="active"><a href="#">On hold</a></li>
                                        <li><a href="#">Resolved</a></li>
                                        <li><a href="#">Closed</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Dublicate</a></li>
                                        <li><a href="#">Invalid</a></li>
                                        <li><a href="#">Wontfix</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-alarm-add"></i> Check in</a></li>
                                        <li><a href="#"><i class="icon-attachment"></i> Attach screenshot</a></li>
                                        <li><a href="#"><i class="icon-rotate-ccw2"></i> Reassign</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-pencil7"></i> Edit task</a></li>
                                        <li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /task -->


        <div class="timeline-date text-muted">
            <span class="text-semibold">Monday</span>, Feb 18
        </div>


        <!-- Weekly stats -->
        <div class="timeline-row">
            <div class="timeline-icon">
                <div class="bg-warning-400">
                    <i class="icon-cash3"></i>
                </div>
            </div>

            <div class="timeline-time">
                New report has been generated
                <span class="text-muted">1 day ago</span>
            </div>

            <div class="panel panel-flat timeline-content">
                <div class="panel-heading">
                    <h6 class="panel-title">Weekly sales statistics</h6>
                    <div class="heading-elements">
                        <span class="heading-text">
                            <i class="icon-arrow-up22 text-success"></i>
                            <span class="text-semibold">23.7%</span>
                        </span>

                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="sales"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /weekly stats -->


        <!-- Invoices -->
        <div class="timeline-row post-even">
            <div class="timeline-icon">
                <div class="bg-success-400">
                    <i class="icon-spinner11"></i>
                </div>
            </div>

            <div class="timeline-time">
                Invoices from <a href="#">Leonardo</a> and <a href="#">Rebecca</a> have been updated
                <span class="text-muted">4 hours ago</span>
            </div>

            <div class="timeline-content">
                <div class="panel border-left-lg border-left-danger invoice-grid">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6 class="text-semibold no-margin-top">Leonardo Fellini</h6>
                                <ul class="list list-unstyled">
                                    <li>Invoice #: &nbsp;0028</li>
                                    <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                </ul>
                            </div>

                            <div class="col-sm-6">
                                <h6 class="text-semibold text-right no-margin-top">$8,750</h6>
                                <ul class="list list-unstyled text-right">
                                    <li>Method: <span class="text-semibold">SWIFT</span></li>
                                    <li class="dropdown">
                                        Status: &nbsp;
                                        <a href="#" class="label bg-danger-400 dropdown-toggle" data-toggle="dropdown">Overdue <span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="active"><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                            <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                            <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                            <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer panel-footer-condensed">
                        <div class="heading-elements">
                            <span class="heading-text">
                                <span class="status-mark border-danger position-left"></span> Due: <span class="text-semibold">2015/02/25</span>
                            </span>

                            <ul class="list-inline list-inline-condensed heading-text pull-right">
                                <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                <li class="dropdown">
                                    <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                        <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                        <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel border-left-lg border-left-success invoice-grid">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6 class="text-semibold no-margin-top">Rebecca Manes</h6>
                                <ul class="list list-unstyled">
                                    <li>Invoice #: &nbsp;0027</li>
                                    <li>Issued on: <span class="text-semibold">2015/02/24</span></li>
                                </ul>
                            </div>

                            <div class="col-sm-6">
                                <h6 class="text-semibold text-right no-margin-top">$5,100</h6>
                                <ul class="list list-unstyled text-right">
                                    <li>Method: <span class="text-semibold">Paypal</span></li>
                                    <li class="dropdown">
                                        Status: &nbsp;
                                        <a href="#" class="label bg-success-400 dropdown-toggle" data-toggle="dropdown">Paid <span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                            <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                            <li class="active"><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                            <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer panel-footer-condensed">
                        <div class="heading-elements">
                            <span class="heading-text">
                                <span class="status-mark border-success position-left"></span> Due: <span class="text-semibold">2015/03/24</span>
                            </span>

                            <ul class="list-inline list-inline-condensed heading-text pull-right">
                                <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                <li class="dropdown">
                                    <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                        <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                        <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /invoices -->


        <!-- Schedule -->
        <div class="timeline-row post-full">
            <div class="timeline-icon">
                <img src="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg" alt="">
            </div>

            <div class="timeline-time">
                <a href="#">Victoria's</a> schedule
                <span class="text-muted">1 day ago</span>
            </div>

            <div class="panel panel-flat timeline-content">
                <div class="panel-heading">
                    <h6 class="panel-title">Victoria's schedule</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-arrow-down12"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
                                    <li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
                                    <li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
                                    <li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="schedule"></div>
                </div>
            </div>
        </div>
        <!-- /schedule -->

    </div>
</div>
<!-- /timeline -->