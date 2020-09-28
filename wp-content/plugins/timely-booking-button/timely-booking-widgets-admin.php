<?php
$tbbaccount = trim(get_option('tbb_account'));
$tbbcolour = get_option('tbb_colour');
$tbwwidth = get_option('tbw_width');
$tbwheight = get_option('tbw_height');
$tbwresp = get_option('tbw_resp');
if (isset($_POST)) {
    // exit('<pre>' . print_r($_POST, 1));
    if (
        array_key_exists('tbb_hidden', $_POST) &&
        array_key_exists('tbb_account_valid', $_POST)  &&
        $_POST['tbb_hidden'] == 'Y' &&
        $_POST['tbb_account_valid'] == 'true'
    ) {

        update_option('tbb_account', trim($_POST['tbb_account']));
        update_option('tbb_colour', $_POST['tbb_colour']);
        update_option('tbw_width', $_POST['tbw_width']);
        update_option('tbw_height', $_POST['tbw_height']);
        update_option('tbw_resp', $_POST['tbw_resp']);
        $tbbaccount = get_option('tbb_account');
        $tbbcolour = get_option('tbb_colour');
        $tbwwidth = get_option('tbw_width');
        $tbwheight = get_option('tbw_height');
        $tbwresp = get_option('tbw_resp');
?>
        <div class="updated">
            <p><strong><?php _e('Options saved.'); ?>
                </strong></p>
        </div>
        <?php
    } else {
        if (array_key_exists('tbb_account_valid', $_POST) && $_POST['tbb_account_valid'] == 'false') {
            $tbbaccount = trim($_POST['tbb_account']);
        ?>
            <div class="updated tbb-update-error">
                <p><strong><?php _e('Error with your account name options not updated'); ?>
                    </strong></p>
            </div>
<?php
        }
    }
}

if ($tbwwidth == '') $tbwwidth = "480";
if ($tbwheight == '') $tbwheight = "600";

?>

<form name="oscimp_form" method="post" action="<?php echo str_replace('%7E', '~', $_SERVER['REQUEST_URI']); ?>">
    <div class="wrap">
        <?php echo "<h2>" . __('Timely Booking Widget Options') . "</h2>"; ?>
        <input type="hidden" name="tbb_hidden" value="Y">
        <input type="hidden" name="tbb_account_valid" value="N">
        <?php echo "<h4>" . __('Account Name') . "</h4>"; ?>
        <p>
            <p>This is the name of your mini website or private address that you chose when setting up your Timely account. If you are not sure what this should be click <a href="//app.gettimely.com/promote/buttons#collapse-6" target="_blank">here</a> to login to your Timely account and check the value.</p>
            <input type="text" name="tbb_account" value="<?php echo $tbbaccount; ?>" size="20" class="tbb-account">
            <span id="tbb-account-correct" class="tbb-account-status" style="display: none;">Valid account</span>
            <span id="tbb-account-wrong" class="tbb-account-status" style="display: none;">Invalid account</span>
        </p>
        <br />
        <hr />
    </div>

    <div class="wrap">
        <?php echo "<h4>" . __('Button Colour') . "</h4>"; ?>
        <p>
            <select name="tbb_colour" class="tbb-colour">
                <option value="light" <?php echo ($tbbcolour == 'light' ? 'selected' : ''); ?>>Light
                <option value="dark" <?php echo ($tbbcolour == 'dark' ? 'selected' : ''); ?>>Dark
            </select>
            <span class="tbb-colour-preview">
                <img src="" />
            </span>
        </p>
        <br />
        <hr />
    </div>

    <div class="wrap">
        <?php echo "<h4>" . __('Widget Size') . "</h4>"; ?>
        <label for="tbw_width">Max Width: </label>
        <input type="number" class="tbw-input-mini" step="10" value="<?php echo $tbwwidth; ?>" id="tbw_width" name="tbw_width" min="0">
        <label for="tbw_height">Height: </label>
        <input type="number" class="tbw-input-mini" step="10" value="<?php echo $tbwheight; ?>" id="tbw_height" name="tbw_height" min="0">
        <?php echo "<h4>" . __('Responsive:') . "</h4>"; ?>
        <label for="tbw_resp">Stretch to 100% width: </label>
        <input type="checkbox" class="tbw-input-mini" value="true" id="tbw_resp" name="tbw_resp" <?php echo ($tbwresp ? " checked" : "") ?>>
        <br />
        <?php echo "<h4>" . __('Preview') . "</h4>"; ?>
        <div>
            <iframe src="//<?php echo $tbbaccount; ?>.gettimely.com/book/embed" scrolling="no" id="timelyWidget" style="<?php echo ($tbwresp ? "margin: 0 auto; display: block; width: 100%; max-" : "") ?>width: <?php echo $tbwwidth; ?>px; height: <?php echo $tbwheight; ?>px; border: 1px solid #4f606b;"></iframe>
        </div>
        <br />
        <hr />
    </div>

    <p class="submit">
        <input type="submit" name="Submit" value="<?php _e('Update Options') ?>" />
    </p>
</form>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        function test_timely_account() {
            var data = {
                action: 'tbb_account_check',
                tbb_account: $('.tbb-account').val().trim()
            };

            // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
            $.post(ajaxurl, data, function(response) {
                var input = $('.tbb-account');
                input.removeClass('tbb-account-correct tbb-account-wrong');
                if (response.indexOf('correct') > -1) {
                    input.addClass('tbb-account-correct');
                    $('span#tbb-account-correct').show();
                    $('span#tbb-account-wrong').hide();
                    $('input[name="tbb_account_valid"]').val('true');
                } else {
                    input.addClass('tbb-account-wrong');
                    $('span#tbb-account-correct').hide();
                    $('span#tbb-account-wrong').show();
                    $('input[name="tbb_account_valid"]').val('false');
                }
            });
        }

        test_timely_account();
        $('.tbb-account').on('keyup', test_timely_account);

        $('.tbb-colour').change(function() {
            $('.tbb-colour-preview img').attr('src', 'http://book.gettimely.com/images/book-buttons//button_' + $(this).val() + '.png');
        });

        $('.tbw-input-mini').change(function() {
            var style = $(this).attr('id') == 'tbw_width' ? 'width' : 'height';
            var width = $("#tbw_width").val();
            var height = $("#tbw_height").val();
            var resp = $("#tbw_resp").attr("checked");
            if (resp) {
                $('#timelyWidget').css("width", "100%");
                $('#timelyWidget').css("height", height);
                $('#timelyWidget').css("max-width", width + "px");
                $('#timelyWidget').css("display", "block");
                $('#timelyWidget').css("margin", "0 auto");
            } else {
                $('#timelyWidget').css("width", width);
                $('#timelyWidget').css("height", height);
                $('#timelyWidget').css("max-width", "auto");
                $('#timelyWidget').css("display", "auto");
                $('#timelyWidget').css("margin", "0");
            }

        });

        jQuery('.tbb-account').trigger('input');
        jQuery('.tbb-colour').trigger('change');
    });
</script>