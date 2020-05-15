<?php

function component($name, $price, $image, $code){
    $element = "
<div class=\"row text-center py-5\">
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
            <form action=\"category.php\" method=\"post\">
                <div class=\"card shadow\">
                    <div>
                        <img src=\"$image\" class=\"img-fluid card-img-top\">
                    </div>
                    <div class=\"card-body\"
                         <h5 class=\"card-title\">$name

                             <h6 class=\"price\"><b>$price</b></h6>
                         </h5>
                    <button type=\"submit\" name=\"submitCart\" class=\"btn btn-warning my-3\"><i class=\"flaticon-bag\"></i><span>ADD TO CART</span></button>
                    
                    <input type='hidden' name='code' value='$code'>
                </div>
            </form>
        </div>
        </div>";

    echo $element;
}

function cartElement($image, $name, $price, $code){
    $element = "
    <form action='cart.php?action=remove&code=$code' method='post' class='cart-items'>
    <tr>
									<td class=\"product-col\">
										<img src=\"$image\" alt=\"\">
										<div class=\"pc-title\">
											<h4>$name</h4>
											<p>$price</p>
											<button type='submit' class='btn btn-danger mx-2' name = 'remove'> REMOVE</button>
										</div>
									</td>
									<td class=\"quy-col\">
										<div class=\"quantity\">
					                        <div class=\"pro-qty\">
												<input type=\"text\" value=\"1\">
											</div>
                    					</div>
									</td>
									<td class=\"total-col\"><h4>$price</h4></td>
								</tr>
								</form>
								";

    echo $element;

}

