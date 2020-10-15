
<?php
    $menu_bg_color      ='#03a9f4';
    $menu_font_color    ='#ffffff';
    $footer_bg_color    ='#0099de';
    $footer_font_color  ='#ffffff';
    $btn_bg_color       ='#03a9f4';
    $btn_font_color     ='#ffffff';
    $theme_color        ='#03a9f4';
    $newslatter_font    ='#ffffff';
    $newslatter_bg      ='#FAF7FF';
    $newslatter_img     =base_url('assets/website/img/newslatter-bg.jpg');

    if ($theme) {
        $theme_data = json_decode($theme->settings, true);
        $menu_bg_color      = $theme_data['menu_bg_color']!=""?$theme_data['menu_bg_color']:$menu_bg_color;
        $menu_font_color    = $theme_data['menu_font_color']!=""?$theme_data['menu_font_color']:$menu_font_color;
        $footer_bg_color    = $theme_data['footer_bg_color']!=""?$theme_data['footer_bg_color']:$footer_bg_color;
        $footer_font_color  = $theme_data['footer_font_color']!=""?$theme_data['footer_font_color']:$footer_font_color;
        $btn_bg_color       = $theme_data['btn_bg_color']!=""?$theme_data['btn_bg_color']:$btn_bg_color;
        $btn_font_color     = $theme_data['btn_font_color']!=""?$theme_data['btn_font_color']:$btn_font_color;
        $theme_color        = $theme_data['theme_color']!=""?$theme_data['theme_color']:$theme_color;
        $newslatter_font    = $theme_data['newslatter_font']!=""?$theme_data['newslatter_font']:$newslatter_font;
        $newslatter_bg      = $theme_data['newslatter_bg']!=""?$theme_data['newslatter_bg']:$newslatter_bg;
        $newslatter_img     = base_url($theme_data['newslatter_img']);
    }
?>

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h2><?php echo (!empty($title)?$title:null) ?></h2>
                </div>
            </div>
            <div class="panel-body">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="border_preview">

                        <?php echo form_open_multipart('backend/cms/themes'); ?>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Menu Background Color<i class="text-danger">*</i></label>
                            <div class="col-sm-5">
                                <input name="menu_bg_color" class="form-control" value="<?php echo $menu_bg_color;?>" type="color" id="menu_bg_color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Menu Font Color<i class="text-danger">*</i></label>
                            <div class="col-sm-5">
                                <input name="menu_font_color" class="form-control" value="<?php echo $menu_font_color;?>" type="color" id="menu_font_color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Footer Background Color<i class="text-danger">*</i></label>
                            <div class="col-sm-5">
                                <input name="footer_bg_color" class="form-control" value="<?php echo $footer_bg_color;?>" type="color" id="footer_bg_color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Footer Font Color<i class="text-danger">*</i></label>
                            <div class="col-sm-5">
                                <input name="footer_font_color" class="form-control" value="<?php echo $footer_font_color;?>" type="color" id="footer_font_color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Button Background Color<i class="text-danger">*</i></label>
                            <div class="col-sm-5">
                                <input name="btn_bg_color" class="form-control" value="<?php echo $btn_bg_color;?>" type="color" id="btn_bg_color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Button Font Color<i class="text-danger">*</i></label>
                            <div class="col-sm-5">
                                <input name="btn_font_color" class="form-control" value="<?php echo $btn_font_color;?>" type="color" id="btn_font_color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Theme Color<i class="text-danger">*</i></label>
                            <div class="col-sm-5">
                                <input name="theme_color" class="form-control" value="<?php echo $theme_color;?>" type="color" id="theme_color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Newslatter Background Color<i class="text-danger">*</i></label>
                            <div class="col-sm-5">
                                <input name="newslatter_bg" class="form-control" value="<?php echo $newslatter_bg;?>" type="color" id="newslatter_bg">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Newslatter Font Color<i class="text-danger">*</i></label>
                            <div class="col-sm-5">
                                <input name="newslatter_font" class="form-control" value="<?php echo $newslatter_font;?>" type="color" id="newslatter_font">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-5">
                                <img src="<?php echo $newslatter_img;?>" style="width: 100px;height: 100px;">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Newslatter Images<i class="text-danger">*</i></label>
                            <div class="col-sm-5">
                                <input name="newslatter_img" class="form-control" type="file" id="newslatter_img">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-8 col-md-offset-3">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>

                        <?php echo form_close();?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>