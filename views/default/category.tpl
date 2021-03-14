<h1>{$rsCategory['name']}</h1>
{foreach $rsProducts as $item name=items}
<div>
			<img src="../public/images/products/{$item['img']}" width="100"/>
        </a><br />
        <a href="../public/?controller=product&id={$item['id']}/">{$item['name']}</a>
    </div>
{/foreach}


