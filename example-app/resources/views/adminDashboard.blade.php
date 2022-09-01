<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Dashboard</title>
</head>

<body style="background-color: #F9F5EB;">
    <div class="container mt-3">
        <h1 style="text-align: right; color:#1C3879; font-style:Sans-serif;">FOOD ITEMS</h1>
        <hr />

        <div class="container" style="padding-top:10px; padding-bottom:10px; border-radius:15px; background-color: #EAE3D2;">
            <form>
                <button type="button" class="btn-close btn-close-black" aria-label="Close"></button>
                <!-- <img src="..." class="rounded mx-auto d-block" alt="..."> -->
                <div class="form-group row mt-3">
                    <label for="foodName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="foodName" placeholder="Enter name..">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="specialIngredients" class="col-sm-2 col-form-label">Special Ingredients</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="specialIngredients" placeholder="Enter any special ingredients..">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="foodPrice" class="col-sm-2 col-form-label">Price (LKR.)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="foodPrice" placeholder="Enter price..">
                    </div>
                </div>

                <!-- <button type="button" class="btn btn-outline-success mt-5">Save</button> -->

                <button class="btn btn-outline-success mt-3 mb-2" type="submit">Submit</button>

                <!-- <button style="font-size:14px; border-radius:10px; border-color:brown; margin-left:85%;">Save <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                    <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                </svg> </button> -->
                
            </form>

        </div>


    </div>

</body>

</html>