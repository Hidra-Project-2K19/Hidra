-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Dez-2019 às 21:40
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `celke`
--

-- --------------------------------------------------------

CREATE TABLE `jogos` (
  `id` int(10) NOT NULL,
  `nome_J` varchar(150) NOT NULL,
  `categoria` varchar(150) NOT NULL,
  `descri` text NOT NULL,
  `plataforma` text NOT NULL,
  `preco` varchar(30) NOT NULL,
  `link_J` varchar(500) NOT NULL,
  `img_1` varchar(100) NOT NULL,
  `img_2` varchar(150) NOT NULL,
  `img_3` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`id`, `nome_J`, `categoria`, `descri`, `plataforma`, `preco`, `link_J`, `img_1`, `img_2`, `img_3`) VALUES
(18, 'Assassins creed 4', 'acao', 'O ano é 1715. Os piratas governam o Caribe e estabeleceram sua própria república sem lei, onde corrupção, ganância e crueldade são comuns.   Entre esses bandidos é um jovem capitão impetuoso chamado Edward Kenway. Sua luta pela glória lhe valeu o respeito de lendas como Barba Negra, mas também o atraiu para a antiga guerra entre Assassinos e Templários, uma guerra que pode destruir tudo o que os piratas construíram.   Bem-vindo à Era de Ouro da Pirataria.', 'PS4|PC|XBOX360', '69,99', 'https://store.steampowered.com/app/242050/Assassins_Creed_IV_Black_Flag/', '5de9a549049cd.jpg', '5de9a549049d4.jpg', '5de9a549049d7.jpg'),
(19, 'God of War 4', 'acao', '• Um novo começo ousado: sua vingança contra os deuses do Olimpo agora é passado e Kratos vive como um homem comum no reino dos monstros e deuses nórdicos. E é nesse mundo inóspito e implacável que ele precisa lutar para sobreviver... e ensinar seu filho a fazer o mesmo. Essa nova versão surpreendente de God of War desconstrói os principais elementos que definiram a série (combates gratificantes, proporção espetacular e uma narrativa poderosa), combinando-os de uma forma diferente.  • Uma segunda oportunidade: Kratos é pai novamente. Assumindo o papel de mentor e protetor de seu filho, Atreus, que está determinado a conquistar seu respeito, Kratos é forçado a lidar e controlar a fúria que, por muito tempo, foi sua essência, e a explorar um mundo extremamente perigoso com seu filho. • Um mundo mais sombrio e elementar: desde as colunas de mármore de ornamentação do Olimpo até as florestas, montanhas e cavernas realistas do universo nórdico pré-viking, esse é um reino claramente novo com seu próprio panteão de criaturas, monstros e deuses. Com uma nova ênfase na descoberta e na exploração, esse mundo atrairá os jogadores para explorar cada centímetro do cenário surpreendentemente ameaçador de God of War, que é, sem dúvida, o maior da série. • Combates físicos violentos: com uma câmera livre e por cima do corpo que aproxima ainda mais o jogador da ação, as lutas de God of War refletem o panteão de criaturas nórdicas que Kratos enfrentará: grandiosas, realistas e exaustivas. Uma nova arma principal e novas habilidades mantêm o espírito que define God of War, além de apresentarem uma visão de conflitos violentos que criam uma nova base para o gênero.  Software sujeito à licença e à garantia limitada (us.playstation.com/softwarelicense/br). É preciso ter uma conta para usar os recursos online, que estão sujeitos aos termos de serviço e à política de privacidade aplicável (playstationnetwork.com/terms-of-service e playstationnetwork.com/privacy-policy). A taxa única de licença dá o direito de jogar no sistema PS4™ principal designado e outros sistemas PS4™ quando está usando essa conta.', 'PS4', '79,99', 'https://store.playstation.com/pt-br/product/UP9000-CUSA07408_00-00000000GODOFWAR', '5de9a7d0840c9.jpg', '5de9a7d0840ce.jpg', '5de9a7d0840d0.jpg'),
(20, 'Counter-Strike', 'acao', 'Counter-Strike: Global Offensive (CS: GO) expandirá na jogabilidade de ação baseada em equipes na qual foi pioneiro quando foi lançado há 12 anos. CS: GO contém novos mapas, personagens e armas, além de conter versões atualizadas de conteúdos do CS clássico (como de_dust2). Além disso, CS: GO introduzirá novos modos de jogo, criação de partidas (matchmaking), placares de líderes e mais. \"Counter-Strike surpreendeu a indústria de jogos quando o improvável MOD virou o jogo de ação online para PC mais jogado no mundo quase imediatamente após seu lançamento em agosto de 1999, disse Doug Lombardi na Valve. Pelos últimos 12 anos, ele continuou sendo um dos jogos mais jogados no mundo, manteve destaque em torneios competitivos de jogos e a franquia vendeu mais de 26 milhões de cópias no mundo todo. CS: GO promete expandir na jogabilidade premiada de CS e permitir seu acesso por jogadores não só no PC, mas também em consoles de última geração e no Mac.\', 'PC', 'Grátis', 'https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/', '5de9a97598316.jpg', '5de9a9759831c.jpg', '5de9a9759831f.jpg'),
(21, ' Rocket League', 'acao', 'Um jogo de ação automobilística futurista, Rocket League®, permite que os jogadores dirijam veículos turbinados que acertam bolas para marcarem gols incríveis e realizarem defesas épicas em arenas variadas e altamente detalhadas. Usando um sistema de física avançado para simular interações realistas, Rocket League® usa massa e momento para dar aos jogadores uma sensação completa de controle intuitivo nesta incrível e criativa abordagem de futebol de alta octanagem.', 'PC', '34,99', 'https://store.steampowered.com/app/252950/Rocket_League/', '5de9ad235bc3a.jpg', '5de9ad235bc41.jpg', '5de9ad235bc44.jpg'),
(22, 'Fortinete', 'acao', 'O Battle Royale do Fortnite é o nosso modo JxJ GRATUITO com 100 jogadores. Um mapa gigante. Um ônibus de batalha. As habilidades de construção e os ambientes destrutíveis do Fortnite combinados com intenso combate JxJ. O último sobrevivente vence. Disponível em PC, PlayStation®4, Xbox One, Nintendo Switch, Android, iOS e Mac.', 'PS4|PC', 'Grátis', 'https://www.epicgames.com/fortnite/pt-BR/home', '5de9ad737c79b.jpg', '5de9ad737c7a1.jpg', '5de9ad737c7a5.jpg'),
(23, 'GTA V', 'acao', 'Junte-se ao lendário empresário Tony Prince para inaugurar uma boate de alto nível ao som da batida alucinante dos renomados DJs Solomun, Tale Of Us, Dixon e Black Madonna. Use-a como fachada para a maior rede de esquemas criminais em San Andreas. Quando um malandro de rua, um ladrão de bancos aposentado e um psicopata aterrorizante se envolvem com alguns dos criminosos mais assustadores e loucos do submundo, o governo dos EUA e a indústria do entretenimento, eles devem realizar golpes ousados para sobreviver nessa cidade implacável onde não podem confiar em ninguém, nem mesmo um no outro. Grand Theft Auto V para PC oferece aos jogadores a opção de explorar o gigantesco e premiado mundo de Los Santos e Blaine County em resoluções de até 4K e além, assim como a chance de experimentar o jogo rodando a 60 FPS (quadros por segundo). O jogo oferece uma ampla seleção de opções de personalização específicas para o PC, com mais de 25 configurações separadas para qualidade de textura, sombreamentos, suavização de bordas e muito mais. Além disso, ele contém diversas opções de personalização dos controles de mouse e teclado. Entre as opções adicionais estão a densidade da população, o controle do tráfego de carros e pedestres, suporte para dois ou três monitores, compatibilidade com telas 3D e suporte para controle plug-and-play. Grand Theft Auto V para PC inclui o Grand Theft Auto Online, com suporte para até 30 jogadores e dois espectadores. Grand Theft Auto Online para PC inclui todas as atualizações de jogo e conteúdos criados pela Rockstar lançados desde que Grand Theft Auto Online foi ao ar, incluindo os recém-lançados Golpes e Modos Adversários. A versão para PC do Grand Theft Auto V e Grand Theft Auto Online apresenta o Modo em Primeira Pessoa, que dá aos jogadores a chance de explorar o mundo incrivelmente detalhado de Los Santos e Blaine County de uma maneira completamente nova.', 'PS4|PC', '99,99', 'https://store.steampowered.com/app/271590/Grand_Theft_Auto_V/', '5de9ae11a1060.jpg', '5de9ae11a1064.jpg', '5de9ae11a1067.jpg'),
(24, 'TES V Skyrim', 'acao', 'Vencedora de mais de 200 prêmios de Jogo do Ano, Skyrim Special Edition dá vida à fantasia épica em detalhes impressionantes. A edição especial inclui o jogo aclamado pela crítica e complementos com recursos totalmente novos, como arte e efeitos remasterizados, raios divinos volumétricos, profundidade de campo dinâmica, reflexos no espaço da tela e muito mais. Skyrim Special Edition também traz todo o poder dos mods para o PC e consoles. Novas quests, ambientes, personagens, diálogos, armaduras, armas e muito mais - com Mods, não há limites para o que você pode experimentar.', 'PC', '39,99', 'https://store.steampowered.com/app/489830/The_Elder_Scrolls_V_Skyrim_Special_Edition/', '5de9aea503099.jpg', '5de9aea50309e.jpg', '5de9aea5030a1.jpg'),
(25, 'Halo 4', 'acao', 'Halo 4 é um jogo eletrônico de tiro em primeira pessoa desenvolvido pela 343 Industries e publicado pela Microsoft Studios exclusivamente para o Xbox 360. Halo 4 é o primeiro de uma nova trilogia de jogos da série Halo, nomeada de \"trilogia Reclaimer\".', 'XBOX', '24,99', 'https://www.microsoft.com/en-us/p/halo-4/c26xnflhtsgh?activetab=pivot:overviewtab', '5de9af1e501bc.jpg', '5de9af1e501c1.jpg', '5de9af1e501c4.jpg'),
(26, 'Need for Speed ​​HP', 'acao', 'Need for Speed ​​Hot Pursuit lança você em uma nova paisagem de mundo aberto ao volante dos carros mais rápidos e bonitos do mundo. De Criterion, o estúdio premiado por trás da série Burnout, Hot Pursuit irá redefinir jogos de corrida para toda uma nova geração. Você experimentará velocidades impressionantes, quedas e escapadas ao enfrentar seus amigos no jogo Need for Speed ​​mais conectado de todos os tempos. Por meio do Need for Speed ​​Autolog e sua abordagem inovadora à concorrência social conectada, sua experiência Hot Pursuit se estenderá além do console para a Web, movendo constantemente seu jogo em direções novas e exclusivas. Carregado com ação, este jogo irá desafiá-lo a se tornar o melhor policial do Condado de Seacrest ou o mais procurado. Pela primeira vez em um jogo Need for Speed, você poderá jogar uma carreira completa em ambos os lados da lei. Se você é um velocista de chumbo ou um policial com uma média, certifique-se de que seus aviadores são impecáveis ​​e seu registro de condução é tudo menos isso.', 'PC', '20,99', 'https://store.steampowered.com/app/47870/Need_For_Speed_Hot_Pursuit/', '5de9af97a20b4.jpg', '5de9af97a20b9.jpg', '5de9af97a20bc.jpg'),
(27, 'Just Cause 4', 'acao', 'Conheça Solís, um imenso território na América do Sul repleto de conflito, opressão e condições climáticas extremas. Just Cause 4 mostra o agente Rico Rodriguez chegando em Solís para buscar a verdade sobre o passado dele, custe o que custar. Equipe o traje planador e o gancho totalmente personalizável e prepare-se para entrar no olho do furacão!', 'PC', '69,99', 'https://store.steampowered.com/app/517630/Just_Cause_4/', '5de9b011a0d9c.jpg', '5de9b011a0da1.jpg', '5de9b011a0da4.jpg'),
(28, 'Outlast 2', 'acao', 'Outlast 2 traz-te Sullivan Knoth e os seus seguidores, que abandonaram o nosso mundo cruel para fundar Temple Gate, uma cidade situada nas profundezas do deserto, longe da civilização. Knoth e o seu rebanho estão a preparar-se para as adversidades do fim dos tempos, e tu estás no centro do furacão. Tu és Blake Langermann, um operador de câmara que trabalha com a sua esposa, Lynn. Sois ambos jornalistas de investigação, dispostos a correr riscos e ir até ao fundo para descobrir as histórias que mais ninguém se atreveria a investigar.', 'PS4|PC', '57,99', 'https://store.steampowered.com/app/414700/Outlast_2/', '5de9b056a4602.jpg', '5de9b056a4608.jpg', '5de9b056a460b.jpg'),
(29, 'Mortal Kombat 11', 'acao', 'Mortal Kombat está de volta, melhor do que nunca, em uma evolução da icônica franquia. A Edição Standard de Mortal Kombat 11 inclui: • Jogo Principal Todas as variações de customização de personagens lhe dão liberdade total para personalizar os lutadores e torná-los únicos. Sinta-se mais perto da luta com os crânios rachados e olhos saltados dos novos gráficos. Com lutadores klássicos, novos e antigos, a incrível cinemática do modo história de Mortal Kombat continua a contar a saga épica de 25 anos atrás.', 'PS4|PC', '199,99', 'https://store.steampowered.com/app/976310/Mortal_Kombat11/', '5de9b09d29c5a.png', '5de9b09d29c60.png', '5de9b09d29c63.png'),
(30, 'Rust', 'acao', ' O único objetivo em Rust é sobreviver. Para fazer isso, você precisará superar lutas como fome, sede e frio. Acenda uma fogueira. Construir um abrigo. Mate animais por carne. Proteja-se de outros jogadores e mate-os por carne. Crie alianças com outros jogadores e forme uma cidade. Faça o que for preciso para sobreviver.', 'PS4|PC', '65,99', 'https://store.steampowered.com/app/252490/Rust/', '5de9b138d1143.png', '5de9b138d1149.png', '5de9b138d114b.png'),
(31, 'Rainbow Six Siege', 'acao', 'Domine a arte da destruição e do uso de gadgets em Tom Clancy’s Rainbow Six Siege. Enfrente combates intensos em curta distância, alta letalidade, decisões táticas, jogabilidade em equipe e ação explosiva a todo momento. Vivencie uma nova era de tiroteios ferozes e estratégia de alto nível nascida do grande legado dos jogos de Tom Clancys Rainbow Six passados.', 'PS4|PC', '59,99', 'https://store.steampowered.com/app/359550/Tom_Clancys_Rainbow_Six_Siege/?curator_clanid=27270161', '5de9b1da0ce4d.jpg', '5de9b1da0ce52.jpg', '5de9b1da0ce55.jpg'),
(32, 'Fallout 4', 'acao', 'Bethesda Game Studios, the award-winning creators of Fallout 3 and The Elder Scrolls V: Skyrim, welcome you to the world of Fallout 4 – their most ambitious game ever, and the next generation of open-world gaming. As the sole survivor of Vault 111, you enter a world destroyed by nuclear war. Every second is a fight for survival, and every choice is yours. Only you can rebuild and determine the fate of the Wasteland. Welcome home.', 'PS4|PC', '69,99', 'https://store.steampowered.com/agecheck/app/377160/', '5de9b26b6d36c.jpg', '5de9b26b6d372.jpg', '5de9b26b6d375.jpg'),
(33, 'Assassins creed 4', 'Indie', 'O ano é 1715. Os piratas governam o Caribe e estabeleceram sua própria república sem lei, onde corrupção, ganância e crueldade são comuns.   Entre esses bandidos é um jovem capitão impetuoso chamado Edward Kenway. Sua luta pela glória lhe valeu o respeito de lendas como Barba Negra, mas também o atraiu para a antiga guerra entre Assassinos e Templários, uma guerra que pode destruir tudo o que os piratas construíram.   Bem-vindo à Era de Ouro da Pirataria.', 'PS4|PC|XBOX360', '69,99', 'https://store.steampowered.com/app/242050/Assassins_Creed_IV_Black_Flag/', '5de9a549049cd.jpg', '5de9a549049d4.jpg', '5de9a549049d7.jpg'),
(34, 'God of War 4', 'Indie', '• Um novo começo ousado: sua vingança contra os deuses do Olimpo agora é passado e Kratos vive como um homem comum no reino dos monstros e deuses nórdicos. E é nesse mundo inóspito e implacável que ele precisa lutar para sobreviver... e ensinar seu filho a fazer o mesmo. Essa nova versão surpreendente de God of War desconstrói os principais elementos que definiram a série (combates gratificantes, proporção espetacular e uma narrativa poderosa), combinando-os de uma forma diferente.  • Uma segunda oportunidade: Kratos é pai novamente. Assumindo o papel de mentor e protetor de seu filho, Atreus, que está determinado a conquistar seu respeito, Kratos é forçado a lidar e controlar a fúria que, por muito tempo, foi sua essência, e a explorar um mundo extremamente perigoso com seu filho. • Um mundo mais sombrio e elementar: desde as colunas de mármore de ornamentação do Olimpo até as florestas, montanhas e cavernas realistas do universo nórdico pré-viking, esse é um reino claramente novo com seu próprio panteão de criaturas, monstros e deuses. Com uma nova ênfase na descoberta e na exploração, esse mundo atrairá os jogadores para explorar cada centímetro do cenário surpreendentemente ameaçador de God of War, que é, sem dúvida, o maior da série. • Combates físicos violentos: com uma câmera livre e por cima do corpo que aproxima ainda mais o jogador da ação, as lutas de God of War refletem o panteão de criaturas nórdicas que Kratos enfrentará: grandiosas, realistas e exaustivas. Uma nova arma principal e novas habilidades mantêm o espírito que define God of War, além de apresentarem uma visão de conflitos violentos que criam uma nova base para o gênero.  Software sujeito à licença e à garantia limitada (us.playstation.com/softwarelicense/br). É preciso ter uma conta para usar os recursos online, que estão sujeitos aos termos de serviço e à política de privacidade aplicável (playstationnetwork.com/terms-of-service e playstationnetwork.com/privacy-policy). A taxa única de licença dá o direito de jogar no sistema PS4™ principal designado e outros sistemas PS4™ quando está usando essa conta.', 'PS4', '79,99', 'https://store.playstation.com/pt-br/product/UP9000-CUSA07408_00-00000000GODOFWAR', '5de9a7d0840c9.jpg', '5de9a7d0840ce.jpg', '5de9a7d0840d0.jpg'),
(35, 'Counter-Strike', 'Indie', 'Counter-Strike: Global Offensive (CS: GO) expandirá na jogabilidade de ação baseada em equipes na qual foi pioneiro quando foi lançado há 12 anos. CS: GO contém novos mapas, personagens e armas, além de conter versões atualizadas de conteúdos do CS clássico (como de_dust2). Além disso, CS: GO introduzirá novos modos de jogo, criação de partidas (matchmaking), placares de líderes e mais. \"Counter-Strike surpreendeu a indústria de jogos quando o improvável MOD virou o jogo de ação online para PC mais jogado no mundo quase imediatamente após seu lançamento em agosto de 1999,\" disse Doug Lombardi na Valve. \"Pelos últimos 12 anos, ele continuou sendo um dos jogos mais jogados no mundo, manteve destaque em torneios competitivos de jogos e a franquia vendeu mais de 26 milhões de cópias no mundo todo. CS: GO promete expandir na jogabilidade premiada de CS e permitir seu acesso por jogadores não só no PC, mas também em consoles de última geração e no Mac.', 'PC', 'Grátis', 'https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/', '5de9a97598316.jpg', '5de9a9759831c.jpg', '5de9a9759831f.jpg'),
(36, ' Rocket League', 'Indie', 'Um jogo de ação automobilística futurista, Rocket League®, permite que os jogadores dirijam veículos turbinados que acertam bolas para marcarem gols incríveis e realizarem defesas épicas em arenas variadas e altamente detalhadas. Usando um sistema de física avançado para simular interações realistas, Rocket League® usa massa e momento para dar aos jogadores uma sensação completa de controle intuitivo nesta incrível e criativa abordagem de futebol de alta octanagem.', 'PC', '34,99', 'https://store.steampowered.com/app/252950/Rocket_League/', '5de9ad235bc3a.jpg', '5de9ad235bc41.jpg', '5de9ad235bc44.jpg'),
(37, 'Fortinete', 'Indie', 'O Battle Royale do Fortnite é o nosso modo JxJ GRATUITO com 100 jogadores. Um mapa gigante. Um ônibus de batalha. As habilidades de construção e os ambientes destrutíveis do Fortnite combinados com intenso combate JxJ. O último sobrevivente vence. Disponível em PC, PlayStation®4, Xbox One, Nintendo Switch, Android, iOS e Mac.', 'PS4|PC', 'Grátis', 'https://www.epicgames.com/fortnite/pt-BR/home', '5de9ad737c79b.jpg', '5de9ad737c7a1.jpg', '5de9ad737c7a5.jpg'),
(39, 'TES V Skyrim', 'Indie', 'Vencedora de mais de 200 prêmios de Jogo do Ano, Skyrim Special Edition dá vida à fantasia épica em detalhes impressionantes. A edição especial inclui o jogo aclamado pela crítica e complementos com recursos totalmente novos, como arte e efeitos remasterizados, raios divinos volumétricos, profundidade de campo dinâmica, reflexos no espaço da tela e muito mais. Skyrim Special Edition também traz todo o poder dos mods para o PC e consoles. Novas quests, ambientes, personagens, diálogos, armaduras, armas e muito mais - com Mods, não há limites para o que você pode experimentar.', 'PC', '39,99', 'https://store.steampowered.com/app/489830/The_Elder_Scrolls_V_Skyrim_Special_Edition/', '5de9aea503099.jpg', '5de9aea50309e.jpg', '5de9aea5030a1.jpg'),
(40, 'Halo 4', 'Indie', 'Halo 4 é um jogo eletrônico de tiro em primeira pessoa desenvolvido pela 343 Industries e publicado pela Microsoft Studios exclusivamente para o Xbox 360. Halo 4 é o primeiro de uma nova trilogia de jogos da série Halo, nomeada de \"trilogia Reclaimer\".', 'XBOX', '24,99', 'https://www.microsoft.com/en-us/p/halo-4/c26xnflhtsgh?activetab=pivot:overviewtab', '5de9af1e501bc.jpg', '5de9af1e501c1.jpg', '5de9af1e501c4.jpg'),
(41, 'GTA V', 'Indie', 'Junte-se ao lendário empresário Tony Prince para inaugurar uma boate de alto nível ao som da batida alucinante dos renomados DJs Solomun, Tale Of Us, Dixon e Black Madonna. Use-a como fachada para a maior rede de esquemas criminais em San Andreas. Quando um malandro de rua, um ladrão de bancos aposentado e um psicopata aterrorizante se envolvem com alguns dos criminosos mais assustadores e loucos do submundo, o governo dos EUA e a indústria do entretenimento, eles devem realizar golpes ousados para sobreviver nessa cidade implacável onde não podem confiar em ninguém, nem mesmo um no outro. Grand Theft Auto V para PC oferece aos jogadores a opção de explorar o gigantesco e premiado mundo de Los Santos e Blaine County em resoluções de até 4K e além, assim como a chance de experimentar o jogo rodando a 60 FPS (quadros por segundo). O jogo oferece uma ampla seleção de opções de personalização específicas para o PC, com mais de 25 configurações separadas para qualidade de textura, sombreamentos, suavização de bordas e muito mais. Além disso, ele contém diversas opções de personalização dos controles de mouse e teclado. Entre as opções adicionais estão a densidade da população, o controle do tráfego de carros e pedestres, suporte para dois ou três monitores, compatibilidade com telas 3D e suporte para controle plug-and-play. Grand Theft Auto V para PC inclui o Grand Theft Auto Online, com suporte para até 30 jogadores e dois espectadores. Grand Theft Auto Online para PC inclui todas as atualizações de jogo e conteúdos criados pela Rockstar lançados desde que Grand Theft Auto Online foi ao ar, incluindo os recém-lançados Golpes e Modos Adversários. A versão para PC do Grand Theft Auto V e Grand Theft Auto Online apresenta o Modo em Primeira Pessoa, que dá aos jogadores a chance de explorar o mundo incrivelmente detalhado de Los Santos e Blaine County de uma maneira completamente nova.', 'PS4|PC', '99,99', 'https://store.steampowered.com/app/271590/Grand_Theft_Auto_V/', '5de9ae11a1060.jpg', '5de9ae11a1064.jpg', '5de9ae11a1067.jpg'),
(42, ' Rocket League', 'Estrategia', 'Um jogo de ação automobilística futurista, Rocket League®, permite que os jogadores dirijam veículos turbinados que acertam bolas para marcarem gols incríveis e realizarem defesas épicas em arenas variadas e altamente detalhadas. Usando um sistema de física avançado para simular interações realistas, Rocket League® usa massa e momento para dar aos jogadores uma sensação completa de controle intuitivo nesta incrível e criativa abordagem de futebol de alta octanagem.', 'PC', '34,99', 'https://store.steampowered.com/app/252950/Rocket_League/', '5de9ad235bc3a.jpg', '5de9ad235bc41.jpg', '5de9ad235bc44.jpg'),
(43, 'Counter-Strike', 'Estrategia', 'Counter-Strike: Global Offensive (CS: GO) expandirá na jogabilidade de ação baseada em equipes na qual foi pioneiro quando foi lançado há 12 anos. CS: GO contém novos mapas, personagens e armas, além de conter versões atualizadas de conteúdos do CS clássico (como de_dust2). Além disso, CS: GO introduzirá novos modos de jogo, criação de partidas (matchmaking), placares de líderes e mais. \"Counter-Strike surpreendeu a indústria de jogos quando o improvável MOD virou o jogo de ação online para PC mais jogado no mundo quase imediatamente após seu lançamento em agosto de 1999,\" disse Doug Lombardi na Valve. \"Pelos últimos 12 anos, ele continuou sendo um dos jogos mais jogados no mundo, manteve destaque em torneios competitivos de jogos e a franquia vendeu mais de 26 milhões de cópias no mundo todo. CS: GO promete expandir na jogabilidade premiada de CS e permitir seu acesso por jogadores não só no PC, mas também em consoles de última geração e no Mac.\', 'PC', 'Grátis', 'https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/', '5de9a97598316.jpg', '5de9a9759831c.jpg', '5de9a9759831f.jpg'),
(44, 'Fortinete', 'Estrategia', 'O Battle Royale do Fortnite é o nosso modo JxJ GRATUITO com 100 jogadores. Um mapa gigante. Um ônibus de batalha. As habilidades de construção e os ambientes destrutíveis do Fortnite combinados com intenso combate JxJ. O último sobrevivente vence. Disponível em PC, PlayStation®4, Xbox One, Nintendo Switch, Android, iOS e Mac.', 'PS4|PC', 'Grátis', 'https://www.epicgames.com/fortnite/pt-BR/home', '5de9ad737c79b.jpg', '5de9ad737c7a1.jpg', '5de9ad737c7a5.jpg'),
(45, 'TES V Skyrim', 'Estrategia', 'Vencedora de mais de 200 prêmios de Jogo do Ano, Skyrim Special Edition dá vida à fantasia épica em detalhes impressionantes. A edição especial inclui o jogo aclamado pela crítica e complementos com recursos totalmente novos, como arte e efeitos remasterizados, raios divinos volumétricos, profundidade de campo dinâmica, reflexos no espaço da tela e muito mais. Skyrim Special Edition também traz todo o poder dos mods para o PC e consoles. Novas quests, ambientes, personagens, diálogos, armaduras, armas e muito mais - com Mods, não há limites para o que você pode experimentar.', 'PC', '39,99', 'https://store.steampowered.com/app/489830/The_Elder_Scrolls_V_Skyrim_Special_Edition/', '5de9aea503099.jpg', '5de9aea50309e.jpg', '5de9aea5030a1.jpg'),
(46, 'Outlast 2', 'Estrategia', 'Outlast 2 traz-te Sullivan Knoth e os seus seguidores, que abandonaram o nosso mundo cruel para fundar Temple Gate, uma cidade situada nas profundezas do deserto, longe da civilização. Knoth e o seu rebanho estão a preparar-se para as adversidades do fim dos tempos, e tu estás no centro do furacão. Tu és Blake Langermann, um operador de câmara que trabalha com a sua esposa, Lynn. Sois ambos jornalistas de investigação, dispostos a correr riscos e ir até ao fundo para descobrir as histórias que mais ninguém se atreveria a investigar.', 'PS4|PC', '57,99', 'https://store.steampowered.com/app/414700/Outlast_2/', '5de9b056a4602.jpg', '5de9b056a4608.jpg', '5de9b056a460b.jpg'),
(47, 'Rust', 'Estrategia', ' O único objetivo em Rust é sobreviver. Para fazer isso, você precisará superar lutas como fome, sede e frio. Acenda uma fogueira. Construir um abrigo. Mate animais por carne. Proteja-se de outros jogadores e mate-os por carne. Crie alianças com outros jogadores e forme uma cidade. Faça o que for preciso para sobreviver.', 'PS4|PC', '65,99', 'https://store.steampowered.com/app/252490/Rust/', '5de9b138d1143.png', '5de9b138d1149.png', '5de9b138d114b.png'),
(48, 'Rainbow Six Siege', 'Estrategia', 'Domine a arte da destruição e do uso de gadgets em Tom Clancy’s Rainbow Six Siege. Enfrente combates intensos em curta distância, alta letalidade, decisões táticas, jogabilidade em equipe e ação explosiva a todo momento. Vivencie uma nova era de tiroteios ferozes e estratégia de alto nível nascida do grande legado dos jogos de Tom Clancys Rainbow Six passados.', 'PS4|PC', '59,99', 'https://store.steampowered.com/app/359550/Tom_Clancys_Rainbow_Six_Siege/?curator_clanid=27270161', '5de9b1da0ce4d.jpg', '5de9b1da0ce52.jpg', '5de9b1da0ce55.jpg'),
(49, 'Fallout 4', 'Estrategia', 'Bethesda Game Studios, the award-winning creators of Fallout 3 and The Elder Scrolls V: Skyrim, welcome you to the world of Fallout 4 – their most ambitious game ever, and the next generation of open-world gaming. As the sole survivor of Vault 111, you enter a world destroyed by nuclear war. Every second is a fight for survival, and every choice is yours. Only you can rebuild and determine the fate of the Wasteland. Welcome home.', 'PS4|PC', '69,99', 'https://store.steampowered.com/agecheck/app/377160/', '5de9b26b6d36c.jpg', '5de9b26b6d372.jpg', '5de9b26b6d375.jpg'),
(50, ' Rocket League', 'Esportes', 'Um jogo de ação automobilística futurista, Rocket League®, permite que os jogadores dirijam veículos turbinados que acertam bolas para marcarem gols incríveis e realizarem defesas épicas em arenas variadas e altamente detalhadas. Usando um sistema de física avançado para simular interações realistas, Rocket League® usa massa e momento para dar aos jogadores uma sensação completa de controle intuitivo nesta incrível e criativa abordagem de futebol de alta octanagem.', 'PC', '34,99', 'https://store.steampowered.com/app/252950/Rocket_League/', '5de9ad235bc3a.jpg', '5de9ad235bc41.jpg', '5de9ad235bc44.jpg'),
(51, 'Need for Speed ​​HP', 'Esportes', 'Need for Speed ​​Hot Pursuit lança você em uma nova paisagem de mundo aberto ao volante dos carros mais rápidos e bonitos do mundo. De Criterion, o estúdio premiado por trás da série Burnout, Hot Pursuit irá redefinir jogos de corrida para toda uma nova geração. Você experimentará velocidades impressionantes, quedas e escapadas ao enfrentar seus amigos no jogo Need for Speed ​​mais conectado de todos os tempos. Por meio do Need for Speed ​​Autolog e sua abordagem inovadora à concorrência social conectada, sua experiência Hot Pursuit se estenderá além do console para a Web, movendo constantemente seu jogo em direções novas e exclusivas. Carregado com ação, este jogo irá desafiá-lo a se tornar o melhor policial do Condado de Seacrest ou o mais procurado. Pela primeira vez em um jogo Need for Speed, você poderá jogar uma carreira completa em ambos os lados da lei. Se você é um velocista de chumbo ou um policial com uma média, certifique-se de que seus aviadores são impecáveis ​​e seu registro de condução é tudo menos isso.', 'PC', '20,99', 'https://store.steampowered.com/app/47870/Need_For_Speed_Hot_Pursuit/', '5de9af97a20b4.jpg', '5de9af97a20b9.jpg', '5de9af97a20bc.jpg'),
(52, 'Counter-Strike', 'BatleRoyale', 'Counter-Strike: Global Offensive (CS: GO) expandirá na jogabilidade de ação baseada em equipes na qual foi pioneiro quando foi lançado há 12 anos. CS: GO contém novos mapas, personagens e armas, além de conter versões atualizadas de conteúdos do CS clássico (como de_dust2). Além disso, CS: GO introduzirá novos modos de jogo, criação de partidas (matchmaking), placares de líderes e mais. \"Counter-Strike surpreendeu a indústria de jogos quando o improvável MOD virou o jogo de ação online para PC mais jogado no mundo quase imediatamente após seu lançamento em agosto de 1999,\" disse Doug Lombardi na Valve. \"Pelos últimos 12 anos, ele continuou sendo um dos jogos mais jogados no mundo, manteve destaque em torneios competitivos de jogos e a franquia vendeu mais de 26 milhões de cópias no mundo todo. CS: GO promete expandir na jogabilidade premiada de CS e permitir seu acesso por jogadores não só no PC, mas também em consoles de última geração e no Mac.', 'PC', 'Grátis', 'https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/', '5de9a97598316.jpg', '5de9a9759831c.jpg', '5de9a9759831f.jpg'),
(53, 'Fortinete', 'BatleRoyale', 'O Battle Royale do Fortnite é o nosso modo JxJ GRATUITO com 100 jogadores. Um mapa gigante. Um ônibus de batalha. As habilidades de construção e os ambientes destrutíveis do Fortnite combinados com intenso combate JxJ. O último sobrevivente vence. Disponível em PC, PlayStation®4, Xbox One, Nintendo Switch, Android, iOS e Mac.', 'PS4|PC', 'Grátis', 'https://www.epicgames.com/fortnite/pt-BR/home', '5de9ad737c79b.jpg', '5de9ad737c7a1.jpg', '5de9ad737c7a5.jpg'),
(54, 'Rust', 'BatleRoyale', ' O único objetivo em Rust é sobreviver. Para fazer isso, você precisará superar lutas como fome, sede e frio. Acenda uma fogueira. Construir um abrigo. Mate animais por carne. Proteja-se de outros jogadores e mate-os por carne. Crie alianças com outros jogadores e forme uma cidade. Faça o que for preciso para sobreviver.', 'PS4|PC', '65,99', 'https://store.steampowered.com/app/252490/Rust/', '5de9b138d1143.png', '5de9b138d1149.png', '5de9b138d114b.png'),
(55, 'Rainbow Six Siege', 'BatleRoyale', 'Domine a arte da destruição e do uso de gadgets em Tom Clancy’s Rainbow Six Siege. Enfrente combates intensos em curta distância, alta letalidade, decisões táticas, jogabilidade em equipe e ação explosiva a todo momento. Vivencie uma nova era de tiroteios ferozes e estratégia de alto nível nascida do grande legado dos jogos de Tom Clancys Rainbow Six passados.', 'PS4|PC', '59,99', 'https://store.steampowered.com/app/359550/Tom_Clancys_Rainbow_Six_Siege/?curator_clanid=27270161', '5de9b1da0ce4d.jpg', '5de9b1da0ce52.jpg', '5de9b1da0ce55.jpg'),
(56, 'TES V Skyrim', 'RPG', 'Vencedora de mais de 200 prêmios de Jogo do Ano, Skyrim Special Edition dá vida à fantasia épica em detalhes impressionantes. A edição especial inclui o jogo aclamado pela crítica e complementos com recursos totalmente novos, como arte e efeitos remasterizados, raios divinos volumétricos, profundidade de campo dinâmica, reflexos no espaço da tela e muito mais. Skyrim Special Edition também traz todo o poder dos mods para o PC e consoles. Novas quests, ambientes, personagens, diálogos, armaduras, armas e muito mais - com Mods, não há limites para o que você pode experimentar.', 'PC', '39,99', 'https://store.steampowered.com/app/489830/The_Elder_Scrolls_V_Skyrim_Special_Edition/', '5de9aea503099.jpg', '5de9aea50309e.jpg', '5de9aea5030a1.jpg'),
(57, 'Fallout 4', 'RPG', 'Bethesda Game Studios, the award-winning creators of Fallout 3 and The Elder Scrolls V: Skyrim, welcome you to the world of Fallout 4 – their most ambitious game ever, and the next generation of open-world gaming. As the sole survivor of Vault 111, you enter a world destroyed by nuclear war. Every second is a fight for survival, and every choice is yours. Only you can rebuild and determine the fate of the Wasteland. Welcome home.', 'PS4|PC', '69,99', 'https://store.steampowered.com/agecheck/app/377160/', '5de9b26b6d36c.jpg', '5de9b26b6d372.jpg', '5de9b26b6d375.jpg');


INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(1, 'igor', 'igorluis0107@gmail.com', 'igor', '25f9e794323b453885f5181f1b624d0b'),
(9, 'ADM1', 'ADM1@gmail.com', 'ADM KJJJ', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;
--
-- Estrutura da tabela `brands`
--

CREATE TABLE `brands` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'LG'),
(2, 'Samsung'),
(3, 'AOC'),
(4, 'Apple');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `sub` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `sub`, `name`) VALUES
(1, NULL, 'Acao'),
(2, NULL, 'Indie'),
(3, NULL, 'Estrategia'),
(4, NULL, 'Esportes'),
(5, NULL, 'Battle Royale'),
(6, NULL, 'RPG'),
(7, NULL, 'Terror');

-- --------------------------------------------------------

--
-- Estrutura da tabela `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `coupon_type` int(11) NOT NULL,
  `coupon_value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `options`
--

CREATE TABLE `options` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `options`
--

INSERT INTO `options` (`id`, `name`) VALUES
(1, 'Cor'),
(2, 'Tamanho'),
(3, 'Memória RAM'),
(4, 'Polegadas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pages`
--

CREATE TABLE `pages` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` text,
  `stock` int(11) NOT NULL,
  `price` float NOT NULL,
  `price_from` float NOT NULL,
  `rating` float NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `sale` tinyint(1) NOT NULL,
  `bestseller` tinyint(1) NOT NULL,
  `new_product` tinyint(1) NOT NULL,
  `options` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `id_category`, `id_brand`, `name`, `description`, `stock`, `price`, `price_from`, `rating`, `featured`, `sale`, `bestseller`, `new_product`, `options`) VALUES
(1, 6, 1, 'Monitor 21 polegadas', 'Alguma descrição do produto.', 10, 499, 599, 0, 1, 1, 1, 0, '1,2,4'),
(2, 6, 2, 'Monitor 18 polegadas', 'Alguma outra descrição', 10, 399, 999, 2, 1, 1, 1, 0, '1,2'),
(3, 6, 2, 'Monitor 19 polegadas', 'Alguma outra descrição', 10, 599, 699, 0, 1, 0, 0, 1, '1,2'),
(4, 6, 3, 'Monitor 17 polegadas', 'Alguma outra descrição', 10, 3779, 900, 2, 1, 0, 0, 0, '1,4'),
(5, 6, 1, 'Monitor 20 polegadas', 'Alguma outra descrição', 10, 299, 499, 0, 1, 0, 0, 1, '1'),
(6, 6, 3, 'Monitor 20 polegadas', 'Alguma outra descrição', 10, 699, 0, 0, 1, 0, 0, 0, '1,2,4'),
(7, 6, 3, 'Monitor 19 polegadas', 'Alguma outra descrição', 10, 889, 999, 5, 1, 1, 0, 0, '2,4'),
(8, 6, 1, 'Monitor 18 polegadas', 'Alguma outra descrição', 10, 599, 699, 0, 1, 0, 0, 0, '4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `products_images`
--

CREATE TABLE `products_images` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `url` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products_images`
--

INSERT INTO `products_images` (`id`, `id_product`, `url`) VALUES
(1, 1, '1.jpg'),
(2, 2, '2.jpg'),
(3, 3, '3.jpg'),
(4, 4, '4.jpg'),
(5, 5, '1.jpg'),
(6, 6, '3.jpg'),
(7, 7, '7.jpg'),
(8, 8, '7.jpg'),
(9, 2, '3.jpg'),
(10, 2, '4.jpg'),
(11, 2, '7.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `products_options`
--

CREATE TABLE `products_options` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_option` int(11) NOT NULL,
  `p_value` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products_options`
--

INSERT INTO `products_options` (`id`, `id_product`, `id_option`, `p_value`) VALUES
(1, 1, 1, 'Azul'),
(2, 1, 2, '23cm'),
(3, 1, 4, '21'),
(4, 2, 1, 'Azul'),
(5, 2, 2, '19cm'),
(6, 3, 1, 'Vermelho'),
(7, 3, 2, '19cm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_coupon` int(11) DEFAULT NULL,
  `total_amount` float NOT NULL,
  `payment_type` int(11) DEFAULT NULL,
  `payment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `purchases_products`
--

CREATE TABLE `purchases_products` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_purchase` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `purchase_transactions`
--

CREATE TABLE `purchase_transactions` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_purchase` int(11) NOT NULL,
  `amount` float NOT NULL,
  `transaction_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rates`
--

CREATE TABLE `rates` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_rated` datetime NOT NULL,
  `points` int(11) NOT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `rates`
--

INSERT INTO `rates` (`id`, `id_product`, `id_user`, `date_rated`, `points`, `comment`) VALUES
(1, 2, 1, '2017-01-01 00:00:00', 2, 'Produto muito legal.'),
(2, 2, 1, '2017-01-02 00:00:00', 2, 'Produto meio ruim.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_info`
--

CREATE TABLE `users_info` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereço` varchar(100) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `CEP` int(8) NOT NULL,
  `nome_cartao` varchar(50) NOT NULL,
  `numero_cartao` int(16) NOT NULL,
  `exp_mes` int(2) NOT NULL,
  `exp_ano` int(4) NOT NULL,
  `secu_code` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users_info`
--

INSERT INTO `users_info` (`id`, `id_user`, `email`, `nome`, `endereço`, `cidade`, `estado`, `CEP`, `nome_cartao`, `numero_cartao`, `exp_mes`, `exp_ano`, `secu_code`) VALUES
(1, 6, 'as@gmail.com', 'as', '', '', '', 0, '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(500) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_options`
--
ALTER TABLE `products_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases_products`
--
ALTER TABLE `purchases_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_transactions`
--
ALTER TABLE `purchase_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products_options`
--
ALTER TABLE `products_options`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases_products`
--
ALTER TABLE `purchases_products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_transactions`
--
ALTER TABLE `purchase_transactions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
