<body>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: lightblue;">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html" style="backround-image:<?= base_url() ?>template/front-end/images/j.jpg; color: salmon;"><?= $title?></a>
                </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="nav navbar-right navbar-top-links">
                   
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?= $this->session->userdata('naran_user'); ?>
                        </a>
                    </li>
                </ul>