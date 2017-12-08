<?php
/**
 *
 * Feed post bot. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.4] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2017, Ger, https://github.com/GerB
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
$lang = array_merge($lang, array(
	'FPB_ACP_FORUM_ID'					=> 'Feed forum',
	'FPB_ACP_FORUM_ID_EXPLAIN'			=> 'O fórum para postar os novos itens de feed em.',
	'FPB_ACP_SETTINGS_EXPLAIN'			=> 'Você pode adicionar feeds RSS, ATOM ou RDF usando o formulário abaixo. Comece com a postagem de um URL de feed. Quando você inserir feeds, você encontra uma tabela com esses parâmetros:',
	'FPB_ACP_FEEDPOSTBOT_SETTING_SAVED'	=> 'Configurações do Feed post bot salvas',
	'FPB_ACP_FEEDPOSTBOT_TITLE'			=> 'Feed post bot',
	'FPB_ADD_FEED'						=> 'Adicionar feed',
	'FPB_APPEND_LINK'					=> 'Adicionar link',
	'FPB_APPEND_LINK_EXPLAIN'			=> 'Adicione um link à fonte do item de feed',
    'FPB_CRON_FREQUENCY'				=> 'Intervalo para processar feeds (segundos)',
	'FPB_CURDATE'						=> 'Data/hora local',
	'FPB_CURDATE_EXPLAIN'				=> 'Verifique para usar o tempo de busca do feed como tempo de postagem. Desmarque para usar o feed PubDate como tempo de publicação.',
	'FPB_FETCH_ALL_FEEDS'				=> 'Obter todos os feeds manualmente',
	'FPB_FEED_TYPE'						=> 'Tipo de Feed',
	'FPB_FEED_TYPE_EXPLAIN'				=> 'Os feeds podem ser ATOM, RDF ou RSS. Ao inserir um feed pela primeira vez, o tipo é detectado automaticamente. Se o feed não retornar quaisquer itens para postar, tente alterar isso.',
	'FPB_FEED_URL'						=> 'URL do Feed',
	'FPB_FEED_URL_EXPLAIN'				=> 'O URL para o feed atual, ex. <code>https://www.phpbb.com/feeds/rss/</code>. Cada URL de feed deve ser exclusivo',
	'FPB_FEED_URL_INVALID'				=> 'URL de feed inválido. Isso pode ser o resultado de uma duplicata na sua lista de feed ou simplesmente uma URL que não atende às especificações',
    'FPB_FEEDS'                         => 'Feeds',
	'FPB_LOG_FEED_ERROR'				=> 'Erro XML na fonte do feed<br />» %s',
	'FPB_LOG_FEED_FETCHED'				=> 'Feed buscado<br />» %s',
	'FPB_LOG_FEED_TIMEOUT'				=> 'Tempo limite do Feed atingido<br />» %s',
	'FPB_PREFIX'						=> 'Prefixo do tópico',
	'FPB_PREFIX_EXPLAIN'				=> 'Você pode optar por adicionar um prefixo aos seus tópicos, por exemplo. "[PhpBB RSS]". Deixe vazio para ficar sem prefixo.',
	'FPB_NO_FEEDS'						=> 'Ainda não existem feeds.',
	'FPB_READ_MORE'						=> 'Leia mais',
	'FPB_REQUIRE_SIMPLEXML'				=> 'O PHP <a href="http://php.net/manual/en/book.simplexml.php">extensão SimpleXML</a> não está disponível no servidor. A extensão precisa disso para ler os feeds e, portanto, não pode ser instalada.',
	'FPB_REQUIRE_URL_FOPEN'				=> 'A configuração do PHP INI <a href="http://php.net/manual/en/filesystem.configuration.php">allow_url_fopen</a> está desabilitada no servidor. A extensão precisa disso para ler os feeds e, portanto, não pode ser instalada.',
	'FPB_SOURCE'						=> 'Fonte:',
	'FPB_TEXTLIMIT'						=> 'Limite de texto',
	'FPB_TEXTLIMIT_EXPLAIN'				=> 'O texto do feed é limitado a um número de caracteres. Observe que esse valor é aplicado ao texto do feed em bruto e as palavras serão mantidas intactas. Depois, qualquer HTML quebrado do feed será corrigido e convertido em BBcode e um link com "Leia mais" é anexado. O limite é, portanto, apenas uma incidência para o texto resultante da publicação. <br> Defina para 0 para desativar a limitação de texto.',
	'FPB_TIMEOUT'						=> 'Tempo esgotado',
	'FPB_TIMEOUT_EXPLAIN'				=> 'Tempo limite para solicitar o URL do feed. Se esse tempo passou sem recuperar o conteúdo do feed, a solicitação será cancelada.',
	'FPB_USER_ID'						=> 'Id do usuário para o Feed',
	'FPB_USER_ID_EXPLAIN'				=> 'O id do usuário que será usado para postar novos itens.',
));
