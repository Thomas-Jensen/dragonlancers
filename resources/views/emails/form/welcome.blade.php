<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{ trans('emails/welcome.welcome-title') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style type="text/css">
        /*<![CDATA[*/
        body.c15 {margin: 0; padding: 0;}
        td.c14 {padding: 20px 0 30px 0;}
        table.c13 {border-collapse: collapse;}
        td.c12 {background-color: #000000; padding-left: 10%; padding-right: 10%}
        table.c11 {color: #ffffff}
        td.c10 {font-size: 0; line-height: 0;}
        td.c9 {font-family: Helvetica, Arial, Verdana, Trebuchet MS, sans-serif; font-size: 16px; line-height: 20px;}
        td.c8 {background-color: #FCFCFC; padding-left: 10%; padding-right: 10%}
        td.c7 {padding-top: 10%; font-family: Helvetica, Arial, Verdana, Trebuchet MS, sans-serif; font-size: 16px; line-height: 16px;}
        a.c6 {color: #000000;}
        span.c5 {color: #000000}
        td.c4 {padding-top: 5%; padding-bottom: 10%; font-family: Helvetica, Arial, Verdana, Trebuchet MS, sans-serif; font-size: 20px; line-height: 24px;}
        td.c3 {font-family: Helvetica, Arial, Verdana, Trebuchet MS, sans-serif; font-size: 20px; line-height: 24px;}
        td.c2 {padding-top: 5%; padding-bottom: 10%; font-family: Helvetica, Arial, Verdana, Trebuchet MS, sans-serif; font-size: 30px; line-height: 30px;}
        img.c1 {display: block;}
        /*]]>*/
    </style>
</head>
<body class="c15">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td class="c14">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="450" class="c13">
                <tr>
                    <td align="center"><img src="{{ asset('images/mailheader.jpg') }}" alt="Dragon Lancers Creative Agency" width="100%" class="c1" /></td>
                </tr>
                <tr>
                    <td class="c8">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td class="c2">{{ trans('emails/welcome.welcome') }}</td>
                            </tr>
                            <tr>
                                <td class="c3">{{ trans('emails/info.dear') }} {{$name}},</td>
                            </tr>
                            <tr>
                                <td align="center"><img src="{{ asset('images/build/welcome.png') }}" alt="Dragon Lancers Creative Agency Welcome" width="100%" class="c1" /></td>
                            </tr>
                            <tr>
                                <td class="c4">{{ trans('emails/welcome.thx-inquiry') }}<br />
                                    <br />
                                    {{ trans('emails/welcome.each-client') }}<br />
                                    <br />
                                    {{ trans('emails/info.contact-soon') }}</td>
                            </tr>
                            <tr>
                                <td class="c3">{{ trans('emails/info.kind-regards') }}<br />
                                    {{ trans('emails/info.dragonlancers') }}</td>
                            </tr>
                            <tr>
                                <td class="c7">{!! trans('emails/info.automated') !!}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="50" class="c12">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="c11">
                            <tr>
                                <td width="75%" class="c9">© Dragon Lancers {{ date('Y') }}</td>
                                <td width="25%" align="right">
                                    <table border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td><a href="https://www.facebook.com/DragonLancers"><img src="{{ asset('images/facebook.png') }}" width="50" height="50" class="c1" border="0" alt="Facebook" /></a></td>
                                            <td class="c10" width="20"> </td>
                                            <td><a href="https://twitter.com/dragonlancersco"><img src="{{ asset('images/twitter.png') }}" width="50" height="50" class="c1" border="0" alt="Twitter" /></a></td>
                                            <td class="c10" width="20"> </td>
                                            <td><a href="https://plus.google.com/111624196448495342344"><img src="{{ asset('images/googleplus.png') }}" width="50" height="50" class="c1" border="0" alt="Google+" /></a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
