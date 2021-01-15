# Sistema em PHP para verificar status de live na Twitch

Esse script foi desenvolvido para verificar se determinada live na Twitch esta online ou offline

### Requisitos:
    
- Computador com acesso a internet
- Id do Cliente da API da Twitch 
- Qualquer canal da Twitch

### Tutorial:
    
1. Primeiramente acesse o site para desenvolvedores da Twitch, e registre a sua aplicação, [clique aqui para acessar](https://dev.twitch.tv/console/apps);
2. O registro é simples, basta digitar o *nome da sua aplicação*, depois a url dela (caso seja localhost, digite https://localhost) e por fim em Categoria escolha *Application Integration*;
3. Pronto agora você ja tem o id do cliente ou cliente id, copie ele e salve em algum lugar seguro;
4. Agora abra o arquivo *script.php* e cole o seu id do cliente onde tem *"DIGIGE SEU ID DO CLIENTE"*
5. Para obter o token execute `curl -X POST "https://id.twitch.tv/oauth2/token?client_secret=SEGREDO_DE_CLIENTE&client_id=ID_DO_CLIENTE&grant_type=client_credentials"`;
6. Por fim, escolha o canal que deseja verificar e cole apenas o nick em *"DIGITE O CANAL AQUI"*
7. Pronto, agora rode seu script e seja feliz; 

*Caso queira qualquer modificação, pode pedir :)*