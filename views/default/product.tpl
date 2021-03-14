<h3>{$rsProduct['name']}</h3>
    
			<img src="../public/images/products/{$rsProduct['img']}" width="350"/>
Стоимость: {$rsProduct['price']}

<a id="removeCart_{$rsProduct['id']}" {if ! $itemInCart}class="hideme"{/if} href="#" onClick="removeFromCart({$rsProduct['id']}); return false;" alt="Удалить из корзины">Удалить из корзины</a>
<a id="addCart_{$rsProduct['id']}" {if $itemInCart}class="hideme"{/if} href="#" onClick="addToCart({$rsProduct['id']}); return false;" alt="Добавить в корзину">Добавить в корзину</a>     
<p> Описание <br />{$rsProduct['description']}</p>