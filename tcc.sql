-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Nov-2018 às 13:49
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE `administradores` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`codigo`, `nome`, `descricao`) VALUES
(1, 'Açougue', 'Carnes Bovinas, Suínas e Aves'),
(2, 'Bebidas', 'Bebidas Não Alcóolicas e Alcóolicas'),
(3, 'Confeitaria', 'Chocolates, Doces e Sobremesas'),
(4, 'Hortifruti', 'Frutas, Legumes e Verduras'),
(5, 'Frios e Laticínios', 'Queijos, Iogurtes e Derivados'),
(6, 'Limpeza', 'Limpeza da Casa e das Roupas'),
(7, 'Pet', 'Rações e Brinquedos para seu Animal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `sexo` varchar(5) NOT NULL,
  `nascimento` date NOT NULL,
  `celular` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero_casa` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_pedido`
--

CREATE TABLE `itens_pedido` (
  `codigo` int(11) NOT NULL,
  `codpedido` int(11) NOT NULL,
  `quantidade` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `valor_unitario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `codigo` int(11) NOT NULL,
  `codcliente` int(11) NOT NULL,
  `quantidade` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `codigo` int(11) NOT NULL,
  `codcategoria` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `preco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`codigo`, `codcategoria`, `nome`, `imagem`, `preco`) VALUES
(1, 1, 'Salsicha Tradicional Sadia 500g', 'imagens/acougue/10658798108702.jpg', '10.69'),
(2, 1, 'Linguiça Mista Sadia 240g', 'imagens/acougue/10658794831902.jpg', '5.59'),
(3, 1, 'Filé de Frango Peito Congelado sem Osso Sadia 1Kg', 'imagens/acougue/10750315462686.jpg', '12.99'),
(4, 1, 'Filé de Peito de Frango Congelado sem Osso Perdigão 1Kg - Sassami', 'imagens/acougue/9390669692958.jpg', '12.59'),
(5, 1, 'Filé de Frango Peito Congelado sem Osso Seara 1Kg', 'imagens/acougue/9519476670494.jpg', '13.89'),
(6, 1, 'Pedaços de Frango Sobrecoxa Congelado com Osso Sadia Frango Fácil 800g', 'imagens/acougue/10699808374814.jpg', '8.99'),
(7, 1, 'Filé de Peito de Frango Congelado Seara 1Kg', 'imagens/acougue/9519477325854.jpg', '9.99'),
(8, 1, 'Costela Congelada com Osso Seara Gourmet 1Kg', 'imagens/acougue/9519475032094.jpg', '32.19'),
(9, 1, 'Ovos Vermelhos Grande Carrefour com 12 Unidades', 'imagens/acougue/9554631393310.jpg', '6.99'),
(10, 1, 'Pedaços de Frango Asa, Sobrecoxa e Peito Congelado com Osso Sadia Na Medida 1Kg', 'imagens/acougue/10658796863518.jpg', '11.19'),
(11, 1, 'Camarão Cinza Pré-Cozido sem Cabeça Congelado DellMare 400g', 'imagens/acougue/10374812172318.jpg', '56.99'),
(12, 1, 'Bacon em Cubos Sadia 140g', 'imagens/acougue/10658798436382.jpg', '9.29'),
(13, 1, 'Filé Sassami de Peito de Frango Congelado Seara 1Kg', 'imagens/acougue/9519475687454.jpg', '9.99'),
(14, 1, 'Pedaços de Sobrecoxa Congelado com Osso Seara Assa Fácil 800g', 'imagens/acougue/9519474704414.jpg', '9.39'),
(15, 1, 'Pedaços de Frango Coxa Congelado com Osso Sadia 1Kg', 'imagens/acougue/10658794504222.jpg', '5.79'),
(16, 1, 'Pedaços de Frango Coxinha da Asa Congelada com Osso Sadia 1Kg', 'imagens/acougue/10750315135006.jpg', '12.59'),
(17, 1, 'Linguiça Mista Defumada Perdigão 240g', 'imagens/acougue/10658797781022.jpg', '4.99'),
(18, 1, 'Charque Bovino Traseiro Friboi 500g', 'imagens/acougue/9538385477662.jpg', '15.59'),
(19, 1, 'Linguiça Portuguesa Defumada Perdigão 400g', 'imagens/acougue/10658798764062.jpg', '11.79'),
(20, 1, 'Hambúrguer Bovino Congelado Sabor Churrasco Sadia 672g com 12 Unidades', 'imagens/acougue/9484444860446.jpg', '15.98'),
(21, 1, 'Hambúrguer de Fraldinha Congelado Wessel 360g com 2 Unidades', 'imagens/acougue/11552461455390.jpg', '15.99'),
(22, 1, 'Peça de Fraldinha Bovina Resfriado Maturatta 1,3Kg', 'imagens/acougue/11189038252062.jpg', '43.59'),
(23, 1, 'Bife de Contra Filé Bovino Resfriado Montana 1,3Kg', 'imagens/acougue/11189043429406.jpg', '47.59'),
(24, 1, 'Hambúrguer de Filé Mignon Congelado Wessel 330g com 2 Unidades', 'imagens/acougue/9484446564382.jpg', '14.19'),
(25, 1, 'Peça de Picanha Bovina Resfriada Montana 1,4Kg', 'imagens/acougue/11189052276766.jpg', '71.49'),
(26, 2, 'Leite Integral UHT Italac 1 Litro', 'imagens/bebidas/9688605360158.jpg', '3.79'),
(27, 2, 'Achocolatado em Pó Chocolate Nescau 3.0 380g\r\n', 'imagens/bebidas/9359475441694.jpg', '5.99'),
(28, 2, 'Isotônico Powerade Sabor Uva 500ml', 'imagens/bebidas/9373559062558.jpg', '4.99'),
(29, 2, 'Coca-Cola 2 Litros', 'imagens/bebidas/12175673655326.jpg', '7.69'),
(30, 2, 'Leite Integral Zero Lactose UHT Tipo A Nestlé Ninho 1 Litro', 'imagens/bebidas/9228915769374.jpg', '6.99'),
(31, 2, 'Água Mineral sem Gás Crystal 350ml', 'imagens/bebidas/11479232708638.jpg', '2.19'),
(32, 2, 'Cerveja Heineken Premium Pilsen Lager 250ml', 'imagens/bebidas/9217732739102.jpg', '3.39'),
(33, 2, 'Néctar de Laranja Del Valle 1 Litro', 'imagens/bebidas/12175687352350.jpg', '5.49'),
(34, 2, 'Cerveja Skol Pilsen Lager 350ml', 'imagens/bebidas/9218294448158.jpg', '2.99'),
(35, 2, 'Energético Monster 473ml', 'imagens/bebidas/9558072000542.jpg', '7.99'),
(36, 2, 'Suco de Uva Del Valle 1 1 Litro', 'imagens/bebidas/12175735980062.jpg', '10.99'),
(37, 2, 'Refresco de Morango Del Valle Kapo 200ml', 'imagens/bebidas/12175685320734.jpg', '1.89'),
(38, 2, 'Leite Integral UHT Tipo A Parmalat 1 Litro', 'imagens/bebidas/9558396633118.jpg', '3.59'),
(39, 2, 'Cerveja Brahma Pilsen Lager 350ml', 'imagens/bebidas/9218294120478.jpg', '2.99'),
(40, 2, 'Bebida Láctea Instantânea Toddynho 200ml - 3 Unidades', 'imagens/bebidas/9487401910302.jpg', '5.79'),
(41, 2, 'Cerveja Budweiser Pilsen Lager 350ml', 'imagens/bebidas/9346484961310.jpg', '2.99'),
(42, 2, 'Água de Coco Sococo 1 Litro', 'imagens/bebidas/9334039707678.jpg', '8.99'),
(43, 2, 'Achocolatado em Pó Solúvel Toddy 800g', 'imagens/bebidas/9373639507998.jpg', '10.19'),
(44, 2, 'Whisky Johnnie Walker Red Label 1 Litro', 'imagens/bebidas/9295714549790.jpg', '95.90'),
(45, 2, 'Cerveja Skol Specialty Beer Beats Senses Ale 269ml', 'imagens/bebidas/9319610744862.jpg', '4.39'),
(46, 2, 'Whisky Jack Daniel\'s Premium 1 Litro', 'imagens/bebidas/9218279211038.jpg', '138.98'),
(47, 2, 'Fanta Uva 2 Litros', 'imagens/bebidas/12175676211230.jpg', '6.29'),
(48, 2, 'Cerveja Skol Beats Senses Specialty Beer Ale 313ml', 'imagens/bebidas/9260914737182.jpg', '5.09'),
(49, 2, 'Whisky White Horse 1 Litro', 'imagens/bebidas/9276794404894.jpg', '88.99'),
(50, 2, 'Pepsi Cola 2 Litros', 'imagens/bebidas/9264047947806.jpg', '5.75'),
(51, 3, 'Barra de Chocolate ao Leite Nestlé Classic 100g', 'imagens/confeitaria/10182004801566.jpg', '4.49'),
(52, 3, 'Caixa de Bombom Sortido Nestlé Especialidades 300g', 'imagens/confeitaria/9349584224286.jpg', '9.99'),
(53, 3, 'Leite Condensado Moça Lata 395g', 'imagens/confeitaria/9230734000158.jpg', '5.49'),
(54, 3, 'Açúcar Refinado União 1Kg', 'imagens/confeitaria/9445701287966.jpg', '2.69'),
(55, 3, 'Leite Condensado Itambé Lata 395g', 'imagens/confeitaria/11062955245598.jpg', '4.09'),
(56, 3, 'Sorvete de Flocos Cremosíssimo Kibon 1,5 Litros', 'imagens/confeitaria/9418785947678.jpg', '18.79'),
(57, 3, 'Açúcar Refinado Caravelas 1kg', 'imagens/confeitaria/9455166652446.jpg', '2.09'),
(58, 3, 'Chocolate Branco Bis Laka 126g', 'imagens/confeitaria/11943598981150.jpg', '3.49'),
(59, 3, 'Creme de Leite Itambé 300g', 'imagens/confeitaria/11062954917918.jpg', '3.89'),
(60, 3, 'Danette de Chocolate 720ml 8 Unidades', 'imagens/confeitaria/9228998148126.jpg', '11.49'),
(61, 3, 'Creme de Leite Fresco Itambé 200g', 'imagens/confeitaria/9445699321886.jpg', ' 2.99'),
(62, 3, 'Mini Bolo de Baunilha Ana Maria 80g', 'imagens/confeitaria/11033695813662.jpg', '2.29'),
(63, 3, 'Mini Bolo de Gotas de Chocolate Ana Maria 80g', 'imagens/confeitaria/9445731434526.jpg', '2.29'),
(64, 3, 'Bolo de Laranja Pullman 250g', 'imagens/confeitaria/9445729468446.jpg', '7.29'),
(65, 3, 'Fermento em Pó Royal 100g', 'imagens/confeitaria/11961036603422.jpg', '2.79'),
(66, 3, 'Adoçante Líquido Sacarina Zero Cal 100ml', 'imagens/confeitaria/11445287845918.jpg', '4.39'),
(67, 3, 'Sorvete Prestígio Nestlé 1,5 Litros', 'imagens/confeitaria/9218241036318.jpg', '20.29'),
(68, 3, 'Creme de Leite Pasteurizado Verde Campo 500g', 'imagens/confeitaria/9359488974878.jpg', '10.59'),
(69, 3, 'Barra de Chocolate ao Leite Hershey\'s 115g', 'imagens/confeitaria/11096531632158.jpg', '4.49'),
(70, 3, 'Petit Gateau Congelado Sabor Chocolate Mr Bey Premium 4 Unidades', 'imagens/confeitaria/9531314044958.jpg', '20.39'),
(71, 3, 'Creme Vegetal Tipo Chantilly Tradicional Vigor 250g', 'imagens/confeitaria/9470090248222.jpg', '22.29'),
(72, 3, 'Barra de Chocolate ao Leite Alpino 100g', 'imagens/confeitaria/10708500676638.jpg', '4.49'),
(73, 3, 'Barra de Chocolate ao Leite Suflair 110g', 'imagens/confeitaria/9230799699998.jpg', '4.49'),
(74, 3, 'Gelatina Sabor Morango Dr. Oetker 20g', 'imagens/confeitaria/10058784964638.jpg', '1.29'),
(75, 3, 'Caixa de Bombom Garoto Sortidos 300g', 'imagens/confeitaria/11943603109918.jpg', '7.99'),
(76, 4, 'Maçã Gala 500g', 'imagens/hortifruti/10138085982238.jpg', '6.49'),
(77, 4, 'Banana Prata 500g', 'imagens/hortifruti/10138034208798.jpg', '2.99'),
(78, 4, 'Alface Crespa', 'imagens/hortifruti/9373492445214.jpg', '1.99'),
(79, 4, 'Tomate 500g', 'imagens/hortifruti/10133111144478.jpg', '2.89'),
(80, 4, 'Cenoura Tradicional 500g', 'imagens/hortifruti/9586836209694.jpg', '2.49'),
(81, 4, 'Cebola Branca 500g', 'imagens/hortifruti/10138036830238.jpg', '2.99'),
(82, 4, 'Batata Monalisa Fresca 500g', 'imagens/hortifruti/10138035847198.jpg', '1.99'),
(83, 4, 'Limão Tahiti 500g', 'imagens/hortifruti/10138084999198.jpg', '2.69'),
(84, 4, 'Alho Branco Pérola 200g', 'imagens/hortifruti/9688620793886.jpg', '4.99'),
(85, 4, 'Laranja Pera 500g', 'imagens/hortifruti/10138083950622.jpg', '2.29'),
(86, 4, 'Abobrinha Italiana Inteira 500g', 'imagens/hortifruti/10138032832542.jpg', '2.99'),
(87, 4, 'Batata Roxa Fresca 500g', 'imagens/hortifruti/10138035191838.jpg', '2.79'),
(88, 4, 'Tomate Italiano 500g', 'imagens/hortifruti/10150470123550.jpg', '3.99'),
(89, 4, 'Mexerica Murcott Fresca 500g', 'imagens/hortifruti/9615239512094.jpg', '3.99'),
(90, 4, 'Abacate 600g', 'imagens/hortifruti/10138030669854.jpg', '4.19'),
(91, 4, 'Mandioquinha 300g', 'imagens/hortifruti/10138087358494.jpg', '3.49'),
(92, 4, 'Chuchu 500g', 'imagens/hortifruti/10138037813278.jpg', '2.79'),
(93, 4, 'Pera Williams 500g', 'imagens/hortifruti/10138094436382.jpg', '6.49'),
(94, 4, 'Beterraba Vermelha 500g', 'imagens/hortifruti/10138036502558.jpg', '2.99'),
(95, 4, 'Maracujá Azedo 500g', 'imagens/hortifruti/9603317432350.jpg', '3.29'),
(96, 4, 'Berinjela Roxa Comprida 500g', 'imagens/hortifruti/10138036174878.jpg', '3.49'),
(97, 4, 'Melão Amarelo 2Kg', 'imagens/hortifruti/10138088734750.jpg', '15.49'),
(98, 4, 'Mamão Papaia 1Kg', 'imagens/hortifruti/10138087030814.jpg', '10.79'),
(99, 4, 'Pepino Comum 500g', 'imagens/hortifruti/9555275710494.jpg', '3.19'),
(100, 4, 'Manga Tommy 1Kg', 'imagens/hortifruti/10138088013854.jpg', '8.79'),
(101, 5, 'Queijo Parmesão Ralado Faixa Azul 100g', 'imagens/laticinios/9456059547678.jpg', '7.99'),
(102, 5, 'Presunto Fatiado Sadia 200g', 'imagens/laticinios/10658793521182.jpg', '8.69'),
(103, 5, 'Queijo Prato Fatiado Sadia 200g', 'imagens/laticinios/9233786994718.jpg', '9.69'),
(104, 5, 'Queijo Cottage Tirolez 400g', 'imagens/laticinios/9349575049246.jpg', '19.99'),
(105, 5, 'Salame Italiano Fatiado Sadia 100g', 'imagens/laticinios/10786517745694.jpg', '9.49'),
(106, 5, 'Requeijão Cremoso Danone 200g', 'imagens/laticinios/9229002473502.jpg', '6.39'),
(107, 5, 'Mortadela Defumada Fatiado Sadia', 'imagens/laticinios/10658793193502.jpg', '4.99'),
(108, 5, 'Requeijão Cremoso Carrefour 500g', 'imagens/laticinios/9476875681822.jpg', '8.99'),
(109, 5, 'Queijo Parmesão Ralado Tirolez 50g', 'imagens/laticinios/9349574721566.jpg', '5.69'),
(110, 5, 'Queijo Processado Light em Cubos Polenguinho 68g', 'imagens/laticinios/9485325729822.jpg', '4.79'),
(111, 5, 'Queijo Minas Frescal Peça Danubio 500g', 'imagens/laticinios/9456059219998.jpg', '21.49'),
(112, 5, 'Bacon em Cubos Sadia 140g', 'imagens/laticinios/10658798436382.jpg', '9.29'),
(113, 5, 'Queijo Muçarela Peça Bom Destino 250g', 'imagens/laticinios/9275222786078.jpg', '16.79'),
(114, 5, 'Linguiça Mista Defumada Perdigão 240g', 'imagens/laticinios/10658797781022.jpg', '4.99'),
(115, 5, 'Linguiça Portuguesa Defumada Perdigão 400g', 'imagens/laticinios/10658798764062.jpg', '11.79'),
(116, 5, 'Queijo Frescal Peça Polenghi Frescatino 250g', 'imagens/laticinios/9390785822750.jpg', '9.19'),
(117, 5, 'Queijo Processado Peça Babybel 110g', 'imagens/laticinios/9458254970910.jpg', '22.99'),
(118, 5, 'Queijo Emmental Peça President 220g', 'imagens/laticinios/9460865269790.jpg', '24.99'),
(119, 5, 'Mortadela Fatiada com Azeitona Ceratti 150g', 'imagens/laticinios/9455436267550.jpg', '5.89'),
(120, 5, 'Salame Copa Fatiado Sadia 100g', 'imagens/laticinios/9476784586782.jpg', '10.99'),
(121, 5, 'Queijo Processado Fatiado Sabor Cheddar Polenghi Sandwich-In 144g', 'imagens/laticinios/9452144885790.jpg', '9.19'),
(122, 5, 'Queijo Camembert Peça Polenghi Sélection 125g', 'imagens/laticinios/9453129400350.jpg', '17.29'),
(123, 5, 'Queijo Provolone Latteria Soresina 200g\r\n', 'imagens/laticinios/9485324353566.jpg', '28.90'),
(124, 5, 'Iogurte Semidesnatado Danone Activia Morango 1250g', 'imagens/laticinios/9416550678558.jpg', '11.89'),
(125, 5, 'Iogurte Desnatado Vigor Morango 900g', 'imagens/laticinios/9484448530462.jpg', '8.59'),
(126, 6, 'Desinfetante Pinho Bril Flores de Limão 1 Litro', 'imagens/limpeza/11907061055518.jpg', '3.99'),
(127, 6, 'Odorizador Glade Aerosol Lembranças de Infância 360ml', 'imagens/limpeza/9225114615838.jpg', '11.19'),
(128, 6, 'Papel Higiênico Folha Dupla 50m Personal 20 Unidades', 'imagens/limpeza/9454950318110.jpg', '47.59'),
(129, 6, 'Esponja Multiuso Scotch-Brite 4 Unidades', 'imagens/limpeza/9426191122462.jpg', '3.89'),
(130, 6, 'Lã de Aço Assolan com 8 Unidades 60g', 'imagens/limpeza/11197686349854.jpg', '1.49'),
(131, 6, 'Água Sanitária Ypê 2 Litros', 'imagens/limpeza/11197688774686.jpg', '4.29'),
(132, 6, 'Detergente Líquido Ypê Clear 500ml - Pack com 6 Unidades', 'imagens/limpeza/11135852544030.jpg', '10.69'),
(133, 6, 'Álcool Zumbi Tradicional 1 Litro', 'imagens/limpeza/9319679328286.jpg', '6.99'),
(134, 6, 'Limpa Piso Veja Perfumes Sensações Flores e Sonho 2 Litros', 'imagens/limpeza/10064397664286.jpg', '7.29'),
(135, 6, 'Esponja Multiuso Bombril Leve 4 Pague 3 Unidades', 'imagens/limpeza/10571338448926.jpg', '4.99'),
(136, 6, 'Lustra Móveis Destac Lavanda Brilha Móveis 200ml', 'imagens/limpeza/9225107996702.jpg', '4.89'),
(137, 6, 'Detergente Líquido Brilhante Neutro 500ml', 'imagens/limpeza/11606106144798.jpg', '1.79'),
(138, 6, 'Água Sanitária Ypê 2 Litros', 'imagens/limpeza/11606167420958.jpg', '3.79'),
(139, 6, 'Desinfetante Minuano Floral 500ml', 'imagens/limpeza/11622229377054.jpg', '2.19'),
(140, 6, 'Desinfetante Pinho Bril Brisa do Mar 1 Litro', 'imagens/limpeza/11907061383198.jpg', '3.99'),
(141, 6, 'Desinfetante Kalipto Eucalipto 5 Litros', 'imagens/limpeza/11907062759454.jpg', '12.49'),
(142, 6, 'Desodorizador Sanitário em Pedra Harpic Cheirinho de Lavanda 25g', 'imagens/limpeza/10064395403294.jpg', '1.89'),
(143, 6, 'Detergente Líquido Brilhante Clear 500ml', 'imagens/limpeza/11606108766238.jpg', '1.79'),
(144, 6, 'Repelente Infantil Kids Icaridina SBP Spray 100ml', 'imagens/limpeza/10040019419166.jpg', '24.99'),
(145, 6, 'Refil para Inseticida Automático para Mosquitos SBP Multi Inseticida Citronela 250ml', 'imagens/limpeza/9276750561310.jpg', '24.69'),
(146, 6, 'Limpador Sanitário Pinho Bril Accept 500ml', 'imagens/limpeza/9262654783518.jpg', '7.29'),
(147, 6, 'Inseticida Multi Insetos Raid Aerosol 450ml', 'imagens/limpeza/11550717870110.jpg', '11.49'),
(148, 6, 'Removedor de resíduos de concreto 5 litros - Vonder', 'imagens/limpeza/9653474033694.jpg', '78.00'),
(149, 6, 'Cloro em Gel Mr Músculo Citrus 500ml', 'imagens/limpeza/9262647574558.jpg', '6.99'),
(150, 6, 'Detergente Líquido Minuano Fresh 3000 500ml', 'imagens/limpeza/12063745507358.jpg', '2.69'),
(151, 7, 'Ração para Cachorro Adulto Purina Dog Chow Carne 10,1Kg', 'imagens/pet/9561516769310.jpg', ' 94.99'),
(152, 7, 'Areia Higiênica Carrefour 4Kg', 'imagens/pet/9470055317534.jpg', '19.99'),
(153, 7, 'Ração para Cachorro Adulto Pedigree 10,1Kg', 'imagens/pet/9470036738078.jpg', '84.99'),
(154, 7, 'Ração para Cachorro Adulto Pedigree Vital Pro Carne, Frango e Cereais 10,1Kg', 'imagens/pet/9470034116638.jpg', '84.99'),
(155, 7, 'Ração para Gatos Adulto Whiskas Frango e Leite 3Kg', 'imagens/pet/9470041391134.jpg', '44.99'),
(156, 7, 'Ração para Gato Purina Friskies Seleção Saborosa Mix de Carnes 3Kg', 'imagens/pet/9548153815070.jpg', '43.99'),
(157, 7, 'Ração para Cachorro Adulto Pequeno Pedigree Equilíbrio Natural Carne 3Kg', 'imagens/pet/9469999382558.jpg', '54.99'),
(158, 7, 'Ração Úmida para Cachorro Pedigree Carne com Molho Sachê 100g', 'imagens/pet/9523464765470.jpg', '1.99'),
(159, 7, 'Bifinho para Cachorro Adulto Keldog Sabor Churrasco 500g', 'imagens/pet/9453149519902.jpg', '24.79'),
(160, 7, 'Areia Floral Pipicat 4Kg', 'imagens/pet/9453154500638.jpg', '12.39'),
(161, 7, 'Areia Campestre Pipicat 4Kg', 'imagens/pet/9453154828318.jpg', '12.39'),
(162, 7, 'Tapete Higiênico Keldog 80x60cm 30 Unidades', 'imagens/pet/9458238816286.jpg', '94.99'),
(163, 7, 'Areia Higiênica Lavanda Carrefour 4Kg', 'imagens/pet/9470057938974.jpg', '24.89'),
(164, 7, 'Biscoito para Cachorro Pedrigree sabor Carne 500g', 'imagens/pet/9469983784990.jpg', '18.39'),
(165, 7, 'Biscoito para Cachorro Filhote Pedrigree Biscrok Sabor Carne 300g', 'imagens/pet/9469983129630.jpg', '13.29'),
(166, 7, 'Bifinho para Cachorro Adulto Keldog Sabor Carne e Vegetais 55g', 'imagens/pet/9453151158302.jpg', '3.29'),
(167, 7, 'Ração para Cachorro Adulto Pedigree Equilíbrio Natural Carne 3Kg', 'imagens/pet/9469999054878.jpg', '54.99'),
(168, 7, 'Ração Úmida para Cachorro Adulto Purina Dog Chow Carne com Molho Sachê 100g', 'imagens/pet/9453197328414.jpg', '2.89'),
(169, 7, 'Petisco para Gato Dreamies Carne 40g', 'imagens/pet/9470040080414.jpg', '3.59'),
(170, 7, 'Petisco para Gato Dreamies Frango 40g', 'imagens/pet/9470039752734.jpg', ' 3.59'),
(171, 7, 'Ração Úmida para Cachorro Filhote Pedigree Frango com Molho 100g', 'imagens/pet/9557335801886.jpg', '1.99'),
(172, 7, 'Ração Úmida para Cachorro Filhote Pedigree Carne com Molho 100g', 'imagens/pet/9470041063454.jpg', '1.99'),
(173, 7, 'Ração Úmida para Gato Adulto Whiskas Patê de Carne 290g', 'imagens/pet/9580627689502.jpg', '5.49'),
(174, 7, 'Ração Úmida para Cachorro Adulto Pedigree Carne ao Molho 290g', 'imagens/pet/10855627980830.jpg', '5.49'),
(175, 7, 'Petisco para Cachorro Purina Doguitos Frango 65g', 'imagens/pet/9453305233438.jpg', '3.99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `itens_pedido`
--
ALTER TABLE `itens_pedido`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `codigo_pedido` (`codpedido`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `cod_clientes` (`codcliente`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_categoria` (`codcategoria`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `itens_pedido`
--
ALTER TABLE `itens_pedido`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `itens_pedido`
--
ALTER TABLE `itens_pedido`
  ADD CONSTRAINT `fk1_itens_pedidos` FOREIGN KEY (`codpedido`) REFERENCES `pedidos` (`codigo`) ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk1_cod_clientes` FOREIGN KEY (`codcliente`) REFERENCES `clientes` (`codigo`) ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_categoria_produto` FOREIGN KEY (`codcategoria`) REFERENCES `categorias` (`codigo`) ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
