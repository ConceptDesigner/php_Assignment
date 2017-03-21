<?php
$title = "PHP Online Bookstore Home";
require('includes/header.php');

?>

    <!-- page specific content starts -->
    <h2>Beginning CakePHP</h2>
    <table class="bookdetails">
        <tr>
            <td style="width: 180px">
                <img src="www/img/books/cakephp.jpg" alt="Beginning cake PHP" title="Beginning cake PHP"
                     style="width: 150px"/>
            </td>
            <td style="width: 80px">
                <h4>Title:</h4>
                <h4>Author</h4>
                <h4>ISBN:</h4>
                <h4>Year:</h4>
                <h4>Pages:</h4>
                <h4>Price</h4>
            </td>
            <td>
                <p>Beginning CakePHP</p>
                <p>David Golding</p>
                <p>1430209771</p>
                <p>2008</p>
                <p>344</p>
                <p>$28.99</p>
            </td>
        </tr>
    </table>
    <!-- page specific content ends -->

<?php require('includes/footer.php'); ?>