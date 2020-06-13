<?php

include('components/tours-data.php');

?>

<div class="container mb-5">
    <div class="row my-5">
        <div class="col-6">
            <h1>Manage Tours</h1>
        </div>
        <div class="col-6">
            <form action="" method="post" class="d-flex justify-content-end">
                <button type="submit" class="btn btn-secondary my-3" name="signout">Sign Out</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Desc</th>
                        <th scope="col">Agency Link</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for ($i = 0; $i < sizeof($tours); $i++) {
                            echo '
                                <tr>
                                    <th style="vertical-align: middle;" scope="row">'.$tours[$i]->id.'</th>
                                    <td style="vertical-align: middle;">'.$tours[$i]->name.'</td>
                                    <td style="vertical-align: middle;">'.$tours[$i]->description.'</td>
                                    <td style="vertical-align: middle;"><a href="'.$tours[$i]->travel_link.'" class="link">Link</a></td>
                                    <td style="vertical-align: middle;"><img src="'.$tours[$i]->image.'" class="card-img-top" style="height:8em; width: 8em" alt="'.$tours[$i]->name.'"></td>
                                    <td style="vertical-align: middle;">
                                        <a role="button" class="btn btn-outline-primary mb-2" href="#">Edit</a>
                                        <br>
                                        <a role="button" class="btn btn-outline-secondary" href="#">Delete</a>
                                    </td>
                                </tr>
                            ';
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="col-12 text-center">
            <a role="button" class="btn btn-outline-success" href="#">+ Add New</a>
        </div>

    </div>
    
</div>