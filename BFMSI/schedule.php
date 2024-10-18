<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Markets</title>
    <script src="schedule.js"></script>
</head>
<body>
<!-- Hamburger Menu -->

    <div class="container mb-3 bg-white text-dark rounded-3 shadow p-3">
        <h1>Inspection Application</h1>
        <form id="inspectionApplication">
            <input class="form-control my-3 rounded-3" type="text" id="marketName" name="marketName" placeholder="Enter Market Name">
            <input class="form-control my-3 rounded-3" type="text" id="marketLocation" name="marketLocation" placeholder="Enter Market Location">
            <select class="form-select" id="marketCategory" name="marketCategory">
                <option selected>Category</option>
                <option value="1">Fish</option>
                <option value="2">Meat</option>
                <option value="3">Vegetable</option>
            </select>
            <button class="btn btn-success m-3 rounded-3" type="submit" name="submit">Add Market</button>
        </form>
    </div>

    <div class="container mb-3 bg-white text-dark rounded-3 shadow p-3">
        <h1>Inspection Schedule</h1>
        <div class="col-sm-4 col-md-3 col-lg-3">
        <input class="form-control my-3 rounded-3" type="text" id="marketName" placeholder="Search Market">
        </div>
        <form>
            <input class="form-control my-3 rounded-3" type="text" id="marketName" placeholder="Enter Market Name">
            <input class="form-control my-3 rounded-3" type="text" id="marketName" placeholder="Enter Market Location">
            <select class="form-select" aria-label="Default select example">
                <option selected>Category</option>
                <option value="1">Fish</option>
                <option value="2">Meat</option>
                <option value="3">Vegetable</option>
            </select>
            <input class="form-control my-3 rounded-3" type="date" id="inspectionDate" placeholder="Enter Inspection Date">
            <input class="form-control my-3 rounded-3" type="time" id="inspectionTime" placeholder="Enter Inspection Time">
            <button class="btn btn-success m-3 rounded-3" type="submit">Add Schedule</button>
        </form>
    </div>

    <div class="container mb-3 bg-white text-dark rounded-3 shadow p-3">
        <h1>Schedule List</h1>
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
