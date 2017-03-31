<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
  img { max-width: 600px; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
  a img { border: none; }
  table { border-collapse: collapse !important; }
  #outlook a { padding:0; }
  .ReadMsgBody { width: 100%; }
  .ExternalClass {width:100%;}
  .backgroundTable {margin:0 auto; padding:0; width:100% !important;}
  table td {border-collapse: collapse;}
  .ExternalClass * {line-height: 115%;}
  td {
    font-family: Arial, sans-serif;
  }
  body {
    -webkit-font-smoothing:antialiased;
    -webkit-text-size-adjust:none;
    width: 100%;
    height: 100%;
    color: #6f6f6f;
    font-weight: 400;
    font-size: 18px;
  }
  h1 {
    margin: 10px 0;
  }
  a {
    color: #27aa90;
    text-decoration: none;
  }
  .force-full-width {
    width: 100% !important;
  }
  .body-padding {
    padding: 0 75px;
  }
  </style>
  <style type="text/css" media="screen">
      @media screen {
        @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900);
        /* Thanks Outlook 2013! */
        * {
          font-family: 'Source Sans Pro', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
        }
        .w280 {
          width: 280px !important;
        }
      }
  </style>
  <style type="text/css" media="only screen and (max-width: 480px)">
    /* Mobile styles */
    @media only screen and (max-width: 480px) {
      table[class*="w320"] {
        width: 320px !important;
      }
      td[class*="w320"] {
        width: 280px !important;
        padding-left: 20px !important;
        padding-right: 20px !important;
      }
      img[class*="w320"] {
        width: 250px !important;
        height: 67px !important;
      }
      td[class*="mobile-spacing"] {
        padding-top: 10px !important;
        padding-bottom: 10px !important;
      }
      *[class*="mobile-hide"] {
        display: none !important;
      }
      *[class*="mobile-br"] {
        font-size: 12px !important;
      }
      td[class*="mobile-w20"] {
        width: 20px !important;
      }
      img[class*="mobile-w20"] {
        width: 20px !important;
      }
      td[class*="mobile-center"] {
        text-align: center !important;
      }
      table[class*="w100p"] {
        width: 100% !important;
      }
      td[class*="activate-now"] {
        padding-right: 0 !important;
        padding-top: 20px !important;
      }
    }
  </style>
</head>
<body offset="0" class="body" style="padding: 0;margin: 0;display: block;background: #eeebeb;-webkit-text-size-adjust: none;-webkit-font-smoothing: antialiased;width: 100%;height: 100%;color: #6f6f6f;font-weight: 400;font-size: 18px;" bgcolor="#eeebeb">
<table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%" style="margin-top: 40px;border-collapse: collapse !important;">
  <tr>
    <td align="center" valign="top" style="background-color: #eeebeb;font-family: Arial, sans-serif;border-collapse: collapse;" width="100%">
    <center>
      <table cellspacing="0" cellpadding="0" width="600" class="w320" style="border-collapse: collapse !important;">
        <tr>
          <td align="center" valign="top" style="font-family: Arial, sans-serif;border-collapse: collapse;">
          <table cellspacing="0" cellpadding="0" width="100%" style="background-color: #3bcdb0;border-collapse: collapse !important;">
            <tr>
              <td style="background-color: #3bcdb0;font-family: Arial, sans-serif;border-collapse: collapse;">

                <table cellspacing="0" cellpadding="0" width="100%" style="border-collapse: collapse !important;">
                  <tr>
                    <td style="font-size: 40px;font-weight: 600;color: #ffffff;text-align: center;font-family: Arial, sans-serif;border-collapse: collapse;" class="mobile-spacing">
                    <div class="mobile-br">&nbsp;</div>
                      @yield('heading')
                    <br>
                    </td>
                  </tr>
                  <tr>
                    <td style="font-size: 24px;text-align: center;padding: 0 75px;color: #6f6f6f;font-family: Arial, sans-serif;border-collapse: collapse;" class="w320 mobile-spacing">
                      @yield('green_content')
                    </td>
                  </tr>
                </table>
                <table cellspacing="0" cellpadding="0" width="100%" style="border-collapse: collapse !important;">
                  <tr>
                    <td style="font-family: Ar.gifial, sans-serif;border-collapse: collapse;">
                      <img src="{{ url('img/email_bg.gif') }}" style="max-width: 100%;display: block;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;">
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff" style="border-collapse: collapse !important;">
            <tr>
              <td style="background-color: #ffffff;font-family: Arial, sans-serif;border-collapse: collapse;">
              <table cellspacing="0" cellpadding="0" width="100%" style="border-collapse: collapse !important;">
                <tr>
                  <td style="text-align: left;font-family: Arial, sans-serif;border-collapse: collapse;padding: 0 75px;" class="mobile-center body-padding w320">
                  <br>
                    @yield('white_content')
                  </td>
                </tr>
              </table>
              <table style="margin: 0 auto;border-collapse: collapse !important;" cellspacing="0" cellpadding="10" width="100%">
                <tr>
                  <td style="text-align: center;margin: 0 auto;font-family: Arial, sans-serif;border-collapse: collapse;">
                  <br>
                  <div><!--[if mso]>
                    <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:45px;v-text-anchor:middle;width:180px;" stroke="f" fillcolor="#f5774e">
                    <w:anchorlock/>
                    <center>
                    <![endif]-->
                    <a href="@yield('url')" style="background-color:#f5774e;color:#ffffff;display:inline-block;font-family:'Source Sans Pro', Helvetica, Arial, sans-serif;font-size:18px;font-weight:400;line-height:45px;text-align:center;text-decoration:none;width:180px;-webkit-text-size-adjust:none;">@yield('button')</a>
                    <!--[if mso]>
                    </center>
                    </v:rect>
                    <![endif]--></div>
                    <br>
                  </td>
                </tr>
              </table>
              <table cellspacing="0" cellpadding="0" bgcolor="#363636" class="force-full-width" style="border-collapse: collapse !important;width: 100% !important;">
                <tr>
                  <td style="color: #f0f0f0;font-size: 14px;text-align: center;padding-bottom: 4px;padding-top: 4px;font-family: Arial, sans-serif;border-collapse: collapse;">
                    © {{ date('Y') }} All Rights Reserved | cDocket
                  </td>
                </tr>
                <tr>
                  <td style="color: #27aa90;font-size: 14px;text-align: center;font-family: Arial, sans-serif;border-collapse: collapse;">
                    <a href="#" style="color: #27aa90;text-decoration: none;">View in browser</a> | <a href="#" style="color: #27aa90;text-decoration: none;">Contact</a>
                  </td>
                </tr>
                <tr>
                  <td style="font-size: 12px;font-family: Arial, sans-serif;border-collapse: collapse;">
                    &nbsp;
                  </td>
                </tr>
              </table>
              </td>
            </tr>
          </table>
          </td>
        </tr>
      </table>
    </center>
    </td>
  </tr>
</table>
</body>
</html>