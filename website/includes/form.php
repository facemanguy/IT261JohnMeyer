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
        <label>Archetype</label>
        <ul>
            <li><input type="radio" name="archetype" value="fighter" value="fighter" <?php if(isset($_POST['archetype']) && $_POST['archetype'] == 'fighter') echo 'checked="checked"';?>"> Fighter</li>
            <li><input type="radio" name="archetype" value="wizard" <?php if(isset($_POST['archetype']) && $_POST['archetype'] == 'wizard') echo 'checked="checked"';?>"> Wizard</li>
            <li><input type="radio" name="archetype" value="rogue" <?php if(isset($_POST['archetype']) && $_POST['archetype'] == 'rogue') echo 'checked="checked"';?>"> Rogue</li>
        </ul>
        <span class="error"><?php echo $archetypeError;?></span>
        <label>Playstyle</label>
        <ul>
            <li><input type="checkbox" name="playstyle[]" value="balanced" <?php if(isset($_POST['playstyle']) && in_array('balanced', $playstyle)) echo'checked="checked"';?>> Balanced</li>
            <li><input type="checkbox" name="playstyle[]" value="brawler" <?php if(isset($_POST['playstyle']) && in_array('brawler', $playstyle)) echo'checked="checked"';?>> Brawler</li>
            <li><input type="checkbox" name="playstyle[]" value="tank" <?php if(isset($_POST['playstyle']) && in_array('tank', $playstyle)) echo'checked="checked"';?>> Tank</li>
            <li><input type="checkbox" name="playstyle[]" value="damageDealer" <?php if(isset($_POST['playstyle']) && in_array('damageDealer', $playstyle)) echo'checked="checked"';?>> Damage Dealer</li>
            <li><input type="checkbox" name="playstyle[]" value="support" <?php if(isset($_POST['playstyle']) && in_array('support', $playstyle)) echo'checked="checked"';?>> Support</li>
        </ul>
        <span class="error"><?php echo $playstyleError;?></span>
        <label>Faction</label>
        <select name="faction">
            <option value="NULL" <?php if(isset($_POST['faction']) && $_POST['faction'] == 'NULL') echo'selected="unselected"';?>>Select One</option>
            <option value="empire" <?php if(isset($_POST['faction']) && $_POST['faction'] == 'empire') echo'selected="selected"';?>>Empire</option>
            <option value="khans" <?php if(isset($_POST['faction']) && $_POST['faction'] == 'khans') echo'selected="selected"';?>>Khans</option>
            <option value="barons" <?php if(isset($_POST['faction']) && $_POST['faction'] == 'barons') echo'selected="selected"';?>>Barons</option>
            <option value="islanders" <?php if(isset($_POST['faction']) && $_POST['faction'] == 'islanders') echo'selected="selected"';?>>Islanders</option>
            <option value="vikings" <?php if(isset($_POST['faction']) && $_POST['faction'] == 'vikings') echo'selected="selected"';?>>Vikings</option>
        </select>
        <span class="error"><?php echo $factionError;?></span>
        <label>Comments</label>
        <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
        <span class="error"><?php echo $commentsError;?></span>
        <label>"I have read the EULA, privacy statement, and rulebook"</label>
        <ul>
            <li><input type="radio" name="agree" value="agree" <?php if(isset($_POST['agree']) && $_POST['agree'] == 'agree') echo 'checked="checked"';?>>Yup! 🤥</li>
        </ul>
        <span class="error"><?php echo $agreeError;?></span>
        <input type="submit" value="submit">
        <p><a href="">Reset</a></p>
    </fieldset>
</form>
