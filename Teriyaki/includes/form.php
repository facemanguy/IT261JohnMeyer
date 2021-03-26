<form class="formbox" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <fieldset>
        <label>First Name</label>
        <input type="text" name="firstName" value="<?php if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']);?>">
        <span class="error"><?php echo $firstNameError;?></span>
        <label>Last Name</label>
        <input type="text" name="lastName" value="<?php if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']);?>">
        <span class="error"><?php echo $lastNameError;?></span>
        <label>Email</label>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
        <span class="error"><?php echo $emailError;?></span>
        <label>Phone Number</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
        <span class="error"><?php echo $phoneError;?></span>
        <label>Protein</label>
        <ul>
            <li><input type="radio" name="protein" value="chicken" value="chicken" <?php if(isset($_POST['protein']) && $_POST['protein'] == 'chicken') echo 'checked="checked"';?>"> Chicken</li>
            <li><input type="radio" name="protein" value="beef" <?php if(isset($_POST['protein']) && $_POST['protein'] == 'beef') echo 'checked="checked"';?>"> Beef</li>
            <li><input type="radio" name="protein" value="pork" <?php if(isset($_POST['protein']) && $_POST['protein'] == 'pork') echo 'checked="checked"';?>"> Pork</li>
            <li><input type="radio" name="protein" value="veggie" <?php if(isset($_POST['protein']) && $_POST['protein'] == 'veggie') echo 'checked="checked"';?>"> Veggie</li>
            <li><input type="radio" name="protein" value="tofu" <?php if(isset($_POST['protein']) && $_POST['protein'] == 'tofu') echo 'checked="checked"';?>"> Tofu</li>
        </ul>
        <span class="error"><?php echo $proteinError;?></span>
        <label>Sides</label>
        <ul>
            <li><input type="checkbox" name="sides[]" value="rice" <?php if(isset($_POST['sides']) && in_array('rice', $sides)) echo'checked="checked"';?>> Rice</li>
            <li><input type="checkbox" name="sides[]" value="salad" <?php if(isset($_POST['sides']) && in_array('salad', $sides)) echo'checked="checked"';?>> Salad</li>
            <li><input type="checkbox" name="sides[]" value="veggies" <?php if(isset($_POST['sides']) && in_array('veggies', $sides)) echo'checked="checked"';?>> Veggies</li>
            <li><input type="checkbox" name="sides[]" value="gyoza" <?php if(isset($_POST['sides']) && in_array('gyoza', $sides)) echo'checked="checked"';?>> Gyoza</li>
            <li><input type="checkbox" name="sides[]" value="eggroll" <?php if(isset($_POST['sides']) && in_array('eggroll', $sides)) echo'checked="checked"';?>> Egg Rolls</li>
        </ul>
        <span class="error"><?php echo $sidesError;?></span>
        <label>pickup</label>
        <select name="pickup">
            <option value="NULL" <?php if(isset($_POST['pickup']) && $_POST['pickup'] == 'NULL') echo'selected="unselected"';?>>Select One</option>
            <option value="now" <?php if(isset($_POST['pickup']) && $_POST['pickup'] == 'now') echo'selected="selected"';?>>Pickup Now</option>
            <option value="later" <?php if(isset($_POST['pickup']) && $_POST['pickup'] == 'later') echo'selected="selected"';?>>Pickup Later</option>
            <option value="request" <?php if(isset($_POST['pickup']) && $_POST['pickup'] == 'request') echo'selected="selected"';?>>At Requested Time</option>
            <option value="delivery" <?php if(isset($_POST['pickup']) && $_POST['pickup'] == 'delivery') echo'selected="selected"';?>>Delivery</option>
        </select>
        <span class="error"><?php echo $pickupError;?></span>
        <label>Comments</label>
        <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
        <span class="error"><?php echo $commentsError;?></span>
        <label>"I have read the EULA, privacy statement, and delivery requirements"</label>
        <ul>
            <li><input type="radio" name="agree" value="agree" <?php if(isset($_POST['agree']) && $_POST['agree'] == 'agree') echo 'checked="checked"';?>> Yes</li>
        </ul>
        <span class="error"><?php echo $agreeError;?></span>
        <input type="submit" value="submit">
        <p><a href="">Reset</a></p>
    </fieldset>
</form>
