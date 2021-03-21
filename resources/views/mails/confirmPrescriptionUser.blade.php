<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>confirm</title>
    <style>
        .form-group{
            width: 300px; 
            background-color: rgb(10, 1, 12)
        }
        .form-control{
            width: 250px; 
            padding: 10px 0;
            margin: 0 auto;
            background-color: rgb(83, 250, 6);
            border-radius: 50px;
            color:rgb(8, 0, 10);
            /* text-align: center; */
            border: none;
            margin-bottom: 50px;
            text-align: center
        }
        a{
            color:rgb(8, 0, 10);
            text-decoration: none;
            width: 250%;
            margin: 0 auto
        }
        h2{
            color: white;
            text-align: center;
            padding: 20% 0 30% 0;
        }
        span{
            color: red
        }
    </style>
</head>
<body>
    <div>
        <p>reply_to: hhoollaaggookkee@gmail.com</p>
        <div class="form-group">
            <h2>Congratulations! prescription to your order has been confirmed <br>
                Please click the button below to proceed <br>
            </h2>
            <div class="form-control">
                <a  href="{{$data['host']}}/pharm-confirm-prescription-user/?prescription={{$data['prescription']}}&item_id={{$data['item_id']}}">continue</a>
            </div>
        </div>
    </div>
</body>
</html>
