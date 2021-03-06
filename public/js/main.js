// добавл в корзину товара
function addToCart(itemId){
    console.log("js - addToCart("+itemId+")");
    $.ajax({
		type: 'POST',
		url: '/controllers/CartController.php',
		dataType: 'json',
		success: function(data){
			console.log(data);
			if(data = ['success']){
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_'+ itemId).hide();
                $('#removeCart_'+ itemId).show();
			}
		}
	});   
}

// удаление
function removeFromCart(itemId){
    console.log("js - removeFromCart("+itemId+")");
    $.ajax({
		type: 'POST',
		url: '/controllers/CartController.php',
		dataType: 'json',
		success: function(data){
			console.log(data);
			if(data = ['success']){
                $('#cartCntItems').html(data['cntItems']);
                
                $('#addCart_'+ itemId).show();
                $('#removeCart_'+ itemId).hide();
			}
		}
	});    
}

// стоимость
function conversionPrice(itemId){
    var newCnt = $('#itemCnt_' + itemId).val();
    var itemPrice = $('#itemPrice_' + itemId).attr('value');
    var itemRealPrice = newCnt * itemPrice;

    $('#itemRealPrice_' + itemId).html(itemRealPrice);
}

// данные с формы
function getData(obj_form){
          var hData = {};
          $('input, textarea, select',  obj_form).each(function(){
               if(this.name && this.name!=''){
                    hData[this.name] = this.value;
					console.log('hData[' + this.name + '] = ' + hData[this.name]);
               }
          });
          return hData;
};

// рега пользоват 
function registerNewUser(){
    var postData = getData('#registerBox');
    
     $.ajax({
		type: 'POST',
		url: '/controllers/UserController.php',
        data: postData,
		dataType: 'json',
		success: function(data){
			if(data['success']){
                alert('Регистрация прошла успешно');
                
                //> блок в левом столбце
                $('#registerBox').hide();
				
				$('#userLink').attr('href', '/user/');    
                $('#userLink').html(data['userName']);
                $('#userBox').show();
                //<
				
				//> страница заказа
                $('#loginBox').hide();
                $('#btnSaveOrder').show();
                //<
			} else {
                alert(data['message']);
            }
            
		}
	});   
}


// авторизация
function login(){
	var email = $('#loginEmail').val();
    var pwd   = $('#loginPwd').val();
    
    var postData = "email="+ email +"&pwd=" +pwd;
    
     $.ajax({
		type: 'POST',
		url: '/controllers/CartController.php',
        data: postData,
		dataType: 'json',
		success: function(data){
			if(data['success']){
                $('#registerBox').hide();
                $('#loginBox').hide();
                
                $('#userLink').attr('href', '/user/');    
                $('#userLink').html(data['displayName']);
                $('#userBox').show();

				//> заполняем поля на странице заказа
				$('#name').val(data['name']);
				$('#phone').val(data['phone']);
				$('#adress').val(data['adress']);
				//<
				
				$('#btnSaveOrder').show();
				
			} else {
                alert(data['message']);
            }
            
		}
	}); 
}


function showRegisterBox(){
	if( $("#registerBoxHidden").css('display') != 'block' ) {
		$("#registerBoxHidden").show();
	} else {
		$("#registerBoxHidden").hide();
	}
}


//   обновл данных польз
  function updateUserData(){
	console.log("js - updateUserData()");
    var phone  = $('#newPhone').val();
    var adress = $('#newAdress').val();
    var pwd1   = $('#newPwd1').val();
    var pwd2   = $('#newPwd2').val();
    var curPwd = $('#curPwd').val();
	var name   = $('#newName').val();
    
	var postData = {phone: phone, 
					adress: adress, 
					pwd1: pwd1, 
					pwd2: pwd2, 
					curPwd: curPwd,
					name: name};
				
	 $.ajax({
		type: 'POST',
		url: '/controllers/CartController.php',
        data: postData,
		dataType: 'json',
		success: function(data){
			if(data['success']){
                $('#userLink').html(data['userName']);
				alert(data['message']);
			} else {
				alert(data['message']);
            }
		}
    
		} ); 
  
  }
  
  
// сохр заказв
function saveOrder(){
	var postData = getData('form');
	 $.ajax({
		type: 'POST',
		url: '/controllers/CartController.php',
        data: postData,
		dataType: 'json',
		success: function(data){
			if(data['success']){
				alert(data['message']);
				document.location = '/';
			} else {
				alert(data['message']);
            }
		}
	 });
}


function showProducts(id){
	var objName = "#purchasesForOrderId_" + id;
	if( $(objName).css('display') != 'table-row' ) {
		$(objName).show();
	} else {
		$(objName).hide();
	}
}