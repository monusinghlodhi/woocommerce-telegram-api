# woocommerce-telegram-api

- English -
An automatic messaging bot plugin created for WordPress WooCommerce that sends messages to Telegram groups when an order is received.

- Hindi -
वर्डप्रेस वूकॉमर्स के लिए बनाया गया एक स्वचालित संदेशिका बॉट प्लगइन जो जब कोई आदेश प्राप्त होता है, तो टेलीग्राम समूहों को संदेश भेजता है।

- Spanish -
Un complemento de bot de mensajería automática creado para WordPress WooCommerce que envía mensajes a grupos de Telegram cuando se recibe un pedido.

- French -
Un plugin de bot de messagerie automatique créé pour WordPress WooCommerce qui envoie des messages aux groupes Telegram lorsqu'une commande est reçue.

- German -
Ein automatisches Messaging-Bot-Plugin, das für WordPress WooCommerce erstellt wurde und Nachrichten an Telegram-Gruppen sendet, wenn eine Bestellung eingegangen ist.

- Italian -
Un plugin di bot di messaggistica automatica creato per WordPress WooCommerce che invia messaggi ai gruppi di Telegram quando viene ricevuto un ordine.

- Portuguese -
Um plugin de bot de mensagens automático criado para o WordPress WooCommerce que envia mensagens para grupos do Telegram quando um pedido é recebido.

- Russian -
Плагин автоматического бота для обмена сообщениями, созданный для WordPress WooCommerce, который отправляет сообщения в группы Telegram при получении заказа.

- Chinese (Simplified) -
一个为WordPress WooCommerce创建的自动消息机器人插件，在收到订单时向Telegram群发送消息。

- Japanese -
WordPress WooCommerce向けに作成された自動メッセージングボットプラグインで、注文が受け取られるとTelegramグループにメッセージを送信します。

- Arabic -
إضافة برنامج ملحق التنبيه التلقائي التي تم إنشاؤها لـ WordPress WooCommerce والتي ترسل رسائل إلى مجموعات Telegram عند استلام الطلب.

- Bengali -
একটি স্বয়ংক্রিয় বার্তা বট প্লাগইন যা অর্ডার পেলে টেলিগ্রাম গ্রুপগুলিতে বার্তা পাঠায় এটি ওয়ার্ডপ্রেস উকুমার্সের জন্য তৈরি করা হয়েছে।

# How to create Telegram Bot and send messages to your group

1) Create Telegram bot:

   Search for user @BotFather in Telegram app. Type /help in BotFather chat and wait for the reply. Type in the chat:

   `/newbot`

   or select /newbot command from Help text. Answer few setup questions:

   - Name of your bot? Write anything you like, that info will be shown in contact details. For example:

   `Dead Parrot`

   - Username for your bot? Must have _bot at the end, use only Latin characters,
   numbers or underscore sign, for example:
   
   `deadparrot_bot`

   BotFather will give you HTTP API token, remember it and keep **SECRET**!
   Example:

   `1234567890:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx`

2) Create new Telegram group in web or mobile application and add the new bot in your group. 
   
   https://web.telegram.org/

3) Send dummy message into your group, replace botname_bot with actual bot name:

   `/my_id @botname_bot`

4) Find Chat ID of your group:
   Type this URL in the browser - change {HTTP_API_TOKEN} to actual value

   `https://api.telegram.org/bot{HTTP_API_TOKEN}/getUpdates`

   From JSON result, get "chat_id" of last message in your group,
   including minus sign in front of it, that's Group Chat ID.
   
   If JSON is empty, repeat steps 3 and 4.

5) That's it, now use the bot. For all available methods, read doc from:

   https://telegram-bot-sdk.readme.io/reference

   Example for Send Text Message method:

   `https://api.telegram.org/bot{HTTP_API_TOKEN}/sendMessage?chat_id={CHAT_ID}&text={MESSAGE_TEXT}`
