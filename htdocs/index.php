<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TAS PHP App</title>
    <style>
        body { 
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; 
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 { color: #00a79d; } /* Tanzu Green */
        .version {
            font-family: monospace;
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 5px;
            font-size: 1.2em;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            $app_name = 'tas-php-sample';
            $vcap = getenv('VCAP_APPLICATION');
            if ($vcap) {
                $vcap_data = json_decode($vcap, true);
                if (isset($vcap_data['application_name'])) {
                    $app_name = $vcap_data['application_name'];
                }
            }
        ?>
        <h1>App Name: <?php echo htmlspecialchars($app_name); ?></h1>
        <p>The current PHP environment is:</p>
        <p class="version">PHP <?php echo phpversion(); ?></p>
    </div>
</body>
</html>
