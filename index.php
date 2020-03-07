<?php

require_once dirname(__FILE__) . '\controller\main.php';

echo '<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="./js/index.js" defer></script>
        <link rel="stylesheet" href="./css/index.css">
    </head>

    <body>
        <div class="col">
            <div class="container col">
                <form method="POST" action="controller/main.php">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="fname" class="form-control" placeholder="First Name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lname" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="you@sample.com">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="+1 (438) 979-3111">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Order Type</label>
                                <select class="form-control form-control" name="type">
                                    <option>Large select</option>
                                    <option>Large select</option>
                                    <option>Large select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Order Value</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="value">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Scheduled Date</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="date" class="form-control" placeholder="2020-02-21" name="date">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>

                <div class="form-group street">
                    <label>Street Address</label>
                    <input type="text" class="form-control" placeholder="" name="street">
                </div>

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" placeholder="" name="city">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>State/Province</label>
                            <input type="text" class="form-control" placeholder="" name="state">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Postal/Zip Code</label>
                            <input type="text" class="form-control" placeholder="" name="postal">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Country</label>
                            <select class="form-control form-control" name="country">
                                <option>Canada</option>
                                <option>US</option>
                                <option>Mexico</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-outline-secondary">Previous Location</button>
                    </div>
                    <div class="col-md-6 btns">
                        <button type="reset" class="btn btn-danger">Cancle</button>
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container row">';

foreach ($customers as $key => $value) {
    echo $value->getEmail() . "</br>";
}

echo '</div>
    </div>
    <div class="col">
        <div class="container row">
        </div>
    </div>
</body>

</html>';