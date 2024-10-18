<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permit Application Tracking</title>
</head>
<body>
        
    <div class="container w-75 bg-white text-dark rounded-3 shadow my-3 p-3">
        <div class="d-flex justify-content-center">
            <h1>Permit Tracker</h1>
        </div>

        <form id="permit-form">
            <label class="form-label" for="market-name">Market Name:</label>
            <input class="form-control mb-3 rounded-3" type="text" id="market-name" placeholder="Enter market name" required>

            <label class="form-label" for="applicant-name">Applicant Name:</label>
            <input class="form-control mb-3 rounded-3" type="text" id="applicant-name" placeholder="Enter applicant's name" required>

            <label class="form-label" for="application-date">Application Date:</label>
            <input class="form-control mb-3 rounded-3" type="date" id="application-date" required>

            <label class="form-label" for="permit-type">Permit Type:</label>
            <input class="form-control mb-3 rounded-3" type="text" id="permit-type" placeholder="Enter permit type" required>

            <div class="d-flex justify-content-end">
                <button class="btn btn-success m-3 rounded-3" data-bs-toggle="collapse" data-bs-target="#updatePassword" aria-expanded="false" aria-controls="collapseExample" type="submit">Track</button>
            </div>
        </form>

        <div class="collapse mb-3" id="updatePassword">
            <div class="card card-body">
            <h3>Permit Status</h3>
            <div id="applications-container" class="applications-container"></div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Store brand:</label>
                <div id="passwordHelpBlock" class="form-text">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
            </div>
            </div>
        </div>

    </div>

    <script src="Permits.js"></script>
</body>
</html>
