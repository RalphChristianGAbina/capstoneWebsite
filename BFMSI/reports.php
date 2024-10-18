<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspection Report Generation</title>
    <link rel="stylesheet" href="reports.css">
</head>
<body>

    <div class="container bg-white text-dark rounded-3 shadow my-3 p-3">
        <div class="d-flex justify-content-center">
            <h1>Inspection Report Generation</h1>
        </div>

        <form id="report-form">
            <div>
                <label class="form-label" for="market-name">Market Name:</label>
                <input class="form-control mb-3 rounded-3" type="text" id="market-name" placeholder="Enter market name" required>
            </div>

            <div>
                <label class="form-label" for="inspection-date">Inspection Date:</label>
                <input class="form-control mb-3 rounded-3" type="date" id="inspection-date" required>
            </div>

            <div>
                <label class="form-label" for="inspector-name">Inspector Name:</label>
                <input class="form-control mb-3 rounded-3" type="text" id="inspector-name" placeholder="Enter inspector's name" required>
            </div>

            <div class="d-flex justify-content-end">
                <button class="btn btn-success m-3 rounded-3" data-bs-toggle="collapse" data-bs-target="#updatePassword" aria-expanded="false" aria-controls="collapseExample" type="submit">Generate Report</button>
            </div>
        </form>

        <div class="collapse mb-3" id="updatePassword">
            <div class="card card-body">
            <h2>Generated Reports</h2>
            <div id="reports-container" class="reports-container"></div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Inspection report:</label>
                <div id="passwordHelpBlock" class="form-text">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
            </div>
            </div>
        </div>

    </div>

    <script src="Reports.js"></script>
</body>
</html>
