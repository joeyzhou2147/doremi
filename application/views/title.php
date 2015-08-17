
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="/images/favicon.png" itemprop="image">
    <link rel="shortcut icon" type="image/x-icon" href="/images/cff_logo.gif">
    <title>Welcome to DoReMi</title>

    <style type="text/css">

        ::selection { background-color: #E13300; color: white; }
        ::-moz-selection { background-color: #E13300; color: white; }

        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            margin: 0 15px 0 15px;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 10px;
            border: 0px solid #D0D0D0;
            box-shadow: 0 0 0px #D0D0D0;
        }

        .center{
            align-content: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .width120{
            width: 200px;
        }

        .hidden{
            display: none;
        }

        .pointer{
            cursor: pointer;
        }
    </style>
</head>
<body>

<div id="container">
    <div class="center">
        <img class="center" alt="DoReMi" height="95" id="hplogo" src="/images/doremi_index.png">
    </div>

    <div id="body">

        <div>
            <form class="center"  action="/index.php/title/search" method="post">
                <div><input class="width120" placeholder="Title" id="musicTitle" class="feedback-input" type="text" name="musicTitle"></div>
                <div><input class="width120 hidden" placeholder="Singer's last name or first name" id="singer" class="feedback-input" type="text" name="singer"></div>
                <button>Search</button></form>

            <p class="center">Search Music Id by&nbsp;
                <a href="/index.php/title" class="pointer">Title</a>,&nbsp;
                <a href="/index.php/singer" class="pointer">singer</a>, or rating.</p>

            <code>Rating List:
                <form class="center">
                    <ul>
                        <li>000000&emsp;爱你一万年&emsp;&emsp;&emsp;singer;</li>
                        <li>000000&emsp;爱你一千年&emsp;&emsp;&emsp;singer;</li>
                        <li>000000&emsp;爱你一百年&emsp;&emsp;&emsp;singer;</li>
                        <?php
                        if(isset($id)){
                            foreach($id as $row){
                                //echo $row;
                                echo '<li>'.$row['musicId'].'&emsp;'.$row['musicTitle'].'&emsp;&emsp;&emsp;'.$row['singer'].';'.'</li>';
                            }
                        }
                        ?>
                    </ul>
                </form>
            </code>

        </div>
    </div>

    <p class="footer center" style="margin-top: 100px;">
        Address: <strong>&nbsp;442 Cambridge St&nbsp;</strong> , Allston, MA 02134
        Phone:<strong>&nbsp;(617) 783-8900&nbsp;</strong>
        Hours: Open today · 4:00 pm – 1:30 am</p>
    <p class="footer center" style="display: none;">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'DoReMi Version <strong>' . '0.0.1' . '</strong>' : '' ?></p>
</div>

</body>
</html>