{* шаблон главной страницы *}

{foreach $rsProducts as $item name=products}
	<div style="float: left; padding: 0px 30px 40px 0px;">
		<a  href="../public/product/{$item['id']}/">
			<img src="../public/images/products/{$item['img']}" width="100" />
		</a><br />
		<a href="../public/product/{$item['id']}/">{$item['name']}</a>
	</div>
		
		
{/foreach}
