 function confereSenha() {
     const password = document.querySelector('input[name=password]');
     const confirmPassword = document.querySelector('input[name=confirmPassword]');

     if(confirmPassword.value === password.value) {
         confirmPassword.setCustomValidity('');
     } else {
         confirmPassword.setCustomValidity('As senha não conferem')
     }
 }

// (function(){

// 	const cep = document.querySelector("input[name=cep]");
  
//   cep.addEventListener('blur', e=> {
//   		const value = cep.value.replace(/[^0-9]+/, '');
//       const url = `https://viacep.com.br/ws/${value}/json/`;
      
//       fetch(url)
//       .then( response => response.json())
//       .then( json => {
      		
//           if( json.logradouro ) {
//           	document.querySelector('input[name=rua]').value = json.logradouro;
//             document.querySelector('input[name=bairro]').value = json.bairro;
//             document.querySelector('input[name=cidade]').value = json.localidade;
//             document.querySelector('input[name=estado]').value = json.uf;
//           }
      
//       });    
//   });
// })();
