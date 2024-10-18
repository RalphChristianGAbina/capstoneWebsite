<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renewable Notifications</title>
</head>
<body>

    <div class="container mb-3 bg-white text-dark rounded-3 shadow p-3">
        <h1>Notifications</h1>

        <div class="d-flex justify-content-end col">
            <button class="btn btn-success lg-m-3 rounded-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Create Notification</button>
        </div>

        <div class="m-3 border rounded-2" style="height: 70vh; overflow: auto;">
            <div class="card card-body m-3 rounded-5">
            <h3>Permit Status</h3>
            <div id="applications-container" class="applications-container"></div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Store brand: Application</label>
                <div id="passwordHelpBlock" class="form-text">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
            </div>
            </div>

            <div class="card card-body m-3 rounded-5">
            <h3>Permit Status</h3>
            <div id="applications-container" class="applications-container"></div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Store brand: Processing</label>
                <div id="passwordHelpBlock" class="form-text">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
            </div>
            </div>

            <div class="card card-body m-3 rounded-5">
            <h3>Permit Status</h3>
            <div id="applications-container" class="applications-container"></div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Store brand: Processing</label>
                <div id="passwordHelpBlock" class="form-text">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
            </div>
            </div>

            <div class="card card-body m-3 rounded-5">
            <h3>Permit Status</h3>
            <div id="applications-container" class="applications-container"></div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Store brand: Completed</label>
                <div id="passwordHelpBlock" class="form-text">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
            </div>
            </div>

            <div class="card card-body m-3 rounded-5">
            <h3>Permit Status</h3>
            <div id="applications-container" class="applications-container"></div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Store brand: Application</label>
                <div id="passwordHelpBlock" class="form-text">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
            </div>
            </div>

        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-body">
                  
                    <div class="container bg-white text-dark rounded-3 px-0">
                        <div class="d-flex justify-content-center">
                            <h1>Renewal Notification</h1>
                        </div>
                
                        <form id="notification-form">
                            <label class="form-label" for="market-name">Add Market:</label>
                            <input class="form-control mb-3 rounded-3" type="text" id="market-name" placeholder="Enter market name" required>
                            
                            <label class="form-label" for="notification-message">Notification Message:</label>
                            <textarea class="form-control mb-3 rounded-3" id="notification-message" placeholder="Enter notification message..." required></textarea>
                
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-secondary m-3" data-bs-dismiss="modal" type="button">Close</button>
                                <button class="btn btn-success my-3 rounded-3" type="submit">Send Notification</button>
                            </div>
                        </form>
                
                    </div>

                </div>
          
              </div>
            </div>

    </div>
</div>
    
    <script src="Notification.js"></script>
</body>
</html>
