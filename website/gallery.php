<?php include('includes/config.php');
include('includes/header.php');

$dog['German_Shepherd'] = 'germa_Originated from Germany.';
$dog['Labrador_Retriever'] = 'labra_Originated from the UK.';
$dog['Siberian_Husky'] = 'siber_Originated from Siberia.';
$dog['Great_Dane'] = 'great_Originated from Germany.';
$dog['French_Bulldog'] = 'frenc_Originated from France.';
$dog['Boston_Terrier'] = 'bosto_Originated from the United States.';
?>

<main>
    <table>
        <?php
        foreach ($dog as $name => $image) :
        ?>
            <tr>
                <td><img src="images/<?php echo substr($image, 0, 5); ?>.jpg" alt="<?php echo $name; ?>" class="dog"></td>
                <td><?php echo str_replace('_', ' ', $name); ?></td>
                <td><?php echo substr($image, 6); ?></td>
            </tr>


        <?php endforeach; ?>
    </table>




</main>

<?php include('includes/footer.php');  ?>