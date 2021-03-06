<header id="header">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12"></div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <nav></nav>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12"></div>
            </div>
        </div>
    </div>
</header>

<main id="content">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <nav aria-label="breadcrumb">
                        <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
                    </nav>
                    <?php if (!empty($title)): ?>
                        <h1><?php print $title; ?></h1>
                    <?php endif; ?>
                    <?php if (!empty($tabs)): ?>
                        <?php print render($tabs); ?>
                    <?php endif; ?>
                    <?php print render($page['content']); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<footer id="footer">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12"></div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <nav></nav>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12"></div>
            </div>
        </div>
    </div>
</footer>