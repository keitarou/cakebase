<datas>
<?php foreach ($datas as $d): ?>
    <store>
    	<?php foreach ($d["User"] as $key=>$value): ?>
    		<?php echo '<'.$key.'>'.$value.'</'.$key.'>';?>
    	<?php endforeach; ?>
    </store>
<?php endforeach; ?>
</datas>