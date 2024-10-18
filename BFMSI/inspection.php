<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspection</title>
</head>
<body>
    
    <div class="container bg-white text-dark rounded-3 shadow mt-3 p-3">
        
        <h1>Schedule List</h1>
        <div class="row">
        <div class="col-sm-4 col-md-6 col-lg-3">
        <input class="form-control mb-3 lg-m-3 rounded-3" type="text" id="marketName" placeholder="Enter Market Name">
        </div>
        <div class="col-sm-4 col-md-3 col-lg-3">
        <select class="form-select mb-3 lg-m-3" aria-label="Default select example">
            <option selected>Category</option>
            <option value="1">Fish</option>
            <option value="2">Meat</option>
            <option value="3">Vegetable</option>
        </select>
        </div>
        </div>
        <div class="m-3 border rounded-2" style="height: 70vh; overflow: auto;">
            <table id="userTable" class="table table-hover">
            <thead>
            <tr>
            <th scope="col">Market</th>
            <th scope="col">Category</th>
            <th scope="col">Schedule</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
            </table>
        </div>

    </div>
</body>
</html>