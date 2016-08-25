/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function fctLogin()
{
   $.post('jp/jpLogin.php',
   {
   email:$('#login').val(),
   senha:$('#senha').val()
   },
   function(res)
   {
       if(res)
       $('main form span').html(res).css({color:'#f00'});
       else
           location.href='admin/index.php';
      // $('main form span').html('LOGADO COM SUCESSO.').css({color:'#069'});
   });
}

