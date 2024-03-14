<!-- <?php
// Include the Simple HTML DOM Parser library
include_once('simple_html_dom.php');

// Function to fetch and parse scholarship data from a website
function fetchScholarships($url) {
    // Create a new instance of Simple HTML DOM Parser
    $html = file_get_html($url);

    // Initialize an array to store scholarship data
    $scholarships = array();

    // Check if HTML content was retrieved successfully
    if($html) {
        // Example: Scraping scholarship details from a hypothetical website
        // Replace the selectors and logic with the actual structure of the website you want to scrape

        // Find scholarship elements based on CSS selectors
        $scholarshipElements = $html->find('.scholarship');

        // Loop through each scholarship element
        foreach ($scholarshipElements as $element) {
            // Extract scholarship details
            $name = $element->find('.scholarship-name', 0)->plaintext;
            $description = $element->find('.scholarship-description', 0)->plaintext;
            $eligibility = $element->find('.scholarship-eligibility', 0)->plaintext;
            $applicationLink = $element->find('.application-link', 0)->href;

            // Create an array for the current scholarship and add it to the scholarships array
            $scholarship = array(
                "name" => $name,
                "description" => $description,
                "eligibility" => $eligibility,
                "applicationLink" => $applicationLink
            );

            // Add the scholarship to the array
            $scholarships[] = $scholarship;
        }

        // Clean up resources
        $html->clear();
        unset($html);
    }

    return $scholarships;
}

// URL of the website containing scholarship information
$url = "https://scholarships.gov.in/";

// Fetch scholarships from the website
$scholarships = fetchScholarships($url);

// Output JSON
header('Content-Type: application/json');
echo json_encode($scholarships);
?> -->

<?php
// Include the Simple HTML DOM Parser library
include_once('simple_html_dom.php');

// Fetch HTML content from the URL
$html = file_get_html('https://scholarships.gov.in');

// Check if HTML content was retrieved successfully
if ($html) {
    // Find elements by CSS selector and extract information
    $title = $html->find('td', 0)->plaintext;
    echo "Title: $title";

    // Clean up resources
    $html->clear();
    unset($html);
} else {
    echo "Failed to fetch HTML content.";
}
?>

