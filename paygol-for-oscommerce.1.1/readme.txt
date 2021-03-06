******* English *******

Paygol module for osCommerce, version 1.1


About Paygol:

- Paygol is an online payment service provider that offers a wide variety of both worldwide and local payment methods.
- Additional information can be found at:
  https://www.paygol.com  
  https://www.paygol.com/pricing
    

Requirements:

- Working osCommerce installation (tested with version 2.3.4, 2.3.3 ).
- Paygol account, you can register for free at https://secure.paygol.com/register
- "Standard" type Paygol service (make sure to select "Integrated" in the service settings), which can be created at 
   https://www.paygol.com/webapps (you must be logged in).
  
  
Installation:

- Unzip the contents of "paygol-for-oscommerce.1.1.zip" directly into the "catalog" folder on your osCommerce site.
- Install the module in your osCommerce administration panel (Modules- > Payment -> Install module -> Find and install the Paygol module). 
- Copy the provided IPN URL and paste it in the "Process URL (IPN)" field at your service's configuration, accessible through
  the "My Services" section of your panel, at Paygol's website.
- Click "Edit" to configure the module.
- Make sure that the module is active (Enable = True).
- Enter the ID of your Paygol service (it can be found at the "My Services" section of your panel, at Paygol's website).
- Enter the Secret key of your Paygol service (it can be found at the "My Services" section of your panel, at Paygol's website).
- Save the changes.

	

Testing:

- To test the newly installed module you can enable your service's "Test" mode at the "My Services" section of your panel, 
  at Paygol's website. Be sure to change it back before going live.

 
Important Notes:

- While in test mode, an IPN request will be issued immediately after each test.
- Payments are usually notified immediately; however, certain payment methods may take longer to confirm the payment 
  (e.g. methods that take a few minutes to notify the transaction, or voucher-based transactions that require the payer 
  to print it in order to pay by cash at a given place). In these cases the product is shown as not paid, and only 
  once it's confirmed by the provider will it show as paid. We strongly recommend that you inform your customers about this 
  beforehand in order to avoid confusions.


  
******* Español *******

Módulo de Paygol para osCommerce, versión 1.1


Acerca de Paygol:

- Paygol es un proveedor de servicios de pago en línea que ofrece una amplia variedad de formas de pago tanto a nivel mundial como local.
- Información adicional se encuentra disponible en:
  https://www.paygol.com/es  
  https://www.paygol.com/es/pricing


Requerimientos:

- Instalación funcional de osCommerce (probado con la versión 2.3.4, 2.3.3).
- Cuenta en Paygol, puedes registrarte de forma gratuita en https://secure.paygol.com/register
- Servicio tipo "Estándar", el cual puede ser creado en https://www.paygol.com/es/webapps (debes haber ingresado a tu cuenta).
  

Instalación:

- Descomprime el contenido de "paygol-for-oscommerce.1.1.zip" directamente en la carpeta "catalog" de tu instalación de osCommerce.
- Instala el módulo en tu panel de administración de osCommerce (Modules- > Payment -> Install module -> Buscar e instalar el módulo de Paygol).
- Copia la IPN URL proporcionada y pégala en el campo "URL de proceso (IPN)" de la configuración de tu servicio, accesible a través de 
  la sección "Mis Servicios" de tu panel, en el sitio web de Paygol.
- Haz click en "Edit" para proceder con la configuración del módulo.
- Asegúrate de que el módulo esté activado (Enable = True).
- Ingresa el ID de tu servicio de Paygol (puede ser encontrado en la sección "Mis Servicios" de tu panel, en el sitio web de Paygol).
- Ingresa el Secret key de tu servicio de Paygol (puede ser encontrado en la sección "Mis Servicios" de tu panel, en el sitio web de Paygol).
- Guarda los cambios.

  
Pruebas:

- Para probar el módulo tras su instalación puedes activar el modo de pruebas de tu servicio en la sección "Mis Servicios" 
  de tu panel, en el sitio web de Paygol. Recuerda cambiarlo de vuelta una vez concluídas tus pruebas.

  
Notas Importantes:

- En modo de pruebas se realizará un llamado a tu archivo IPN inmediatamente después de cada prueba.
- Los pagos usualmente son notificados inmediatamente; ahora bien, algunos métodos de pago podrían tomar más tiempo en notificar 
  la transacción (ej: métodos que toman algunos minutos en realizar la notificación, o métodos basados en boletos que deben ser 
  impresos y pagados en efectivo). En esos casos el producto se mostrará como no pagado, y sólo una vez sea confirmado por el 
  proveedor se mostrará como pagado. Recomendamos que informes a tu cliente sobre esto a modo de evitar confusiones.	
	
 