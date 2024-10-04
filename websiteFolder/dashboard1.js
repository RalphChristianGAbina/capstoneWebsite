// Simulating data (in real scenarios, this could come from a server or database)
const metricsData = {
    totalMarkets: 10,
    totalFailed: 3,
    totalInspected: 7,
    totalSchedule: 5,
    totalPassed: 4
};

// Function to load metrics into the dashboard
function loadMetrics() {
    document.getElementById("totalMarkets").innerText = `Total Markets: ${metricsData.totalMarkets}`;
    document.getElementById("totalFailed").innerText = `Total Failed: ${metricsData.totalFailed}`;
    document.getElementById("totalInspected").innerText = `Total Inspected: ${metricsData.totalInspected}`;
    document.getElementById("totalSchedule").innerText = `Total Schedule: ${metricsData.totalSchedule}`;
    document.getElementById("totalPassed").innerText = `Total Passed: ${metricsData.totalPassed}`;
}

// Load the metrics when the page loads
window.onload = loadMetrics;