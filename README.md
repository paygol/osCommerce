<img src="paygol_logo.png" alt="Paygol - osCommerce" /><br>


# osCommerce
Accept several payment methods in your sopping cart such as mobile payments (SMS &amp; Phone call), Credit Cards, PayPal, Sofort, iDeal, Mister Cash, IBAN and more...

## Paygol module for osCommerce <br>
[About Paygol](#about-paygol) <br>
[Requirements](#requirements) <br>
[Installation](#installation) <br>
[Testing](#testing) <br>
[Important Notes](#important-notes) <br>
[Changelog](#changelog)<br><br>

---

## Paygol module for osCommerce, version 1.1

### About Paygol:

- Paygol is an online payment service provider that offers a wide variety of both worldwide and local payment methods.
- Website: https://www.paygol.com 
- Payment methods: https://www.paygol.com/pricing
    

### Requirements:

- Working osCommerce installation (tested with version 2.3.4, 2.3.3 ).
- Paygol account, you can register for free at https://secure.paygol.com/register
- "Standard" type PayGol service (make sure to select "Integrated" in the service settings), which can be created at 
   https://www.paygol.com/webapps (you must be logged in).
  
  
### Installation:

- Unzip the contents of "paygol-for-oscommerce.1.1.zip" directly into the "catalog" folder on your osCommerce site.
- Install the module in your osCommerce administration panel (Modules- > Payment -> Install module -> Find and install the Paygol module). 
- Copy the provided IPN URL and paste it in the "Process URL (IPN)" field at your service's configuration, accessible through
  the "My Services" section of your panel, at Paygol's website.
- Click "Edit" to configure the module.
- Make sure that the module is active (Enable = True).
- Enter the ID of your PayGol service (it can be found at the "My Services" section of your panel, at PayGol's website).
- Enter the Secret key of your PayGol service (it can be found at the "My Services" section of your panel, at Paygol's website).
- Save the changes.

	

### Testing:

- To test the newly installed module you can enable your service's "Test" mode at the "My Services" section of your panel, 
  at Paygol's website. Be sure to change it back before going live.

 
### Important Notes:

- While in test mode, an IPN request will be issued immediately after each test.
- Payments are usually notified immediately; however, certain payment methods may take longer to confirm the payment 
  (e.g. methods that take a few minutes to notify the transaction, or voucher-based transactions that require the payer 
  to print it in order to pay by cash at a given place). In these cases the product is shown as not paid, and only 
  once it's confirmed by the provider will it show as paid. We strongly recommend that you inform your customers about this 
  beforehand in order to avoid confusions.
	

### Changelog


#### v1.1
- New release, added validation for payment notifications.

#### v1.0

- Initial release.

---
<br>

