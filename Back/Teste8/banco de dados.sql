CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `senha` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adm` tinyint NOT NULL,
  `cadastrado` tinyint NOT NULL,
  `DataHoraCadastro` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb3;


CREATE TABLE `documento` (
  `nome` varchar(500) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `descricao` text NOT NULL,
  `TipoLR` tinyint NOT NULL,
  `TipoAR` tinyint NOT NULL,
  `TipoI` tinyint NOT NULL,
  `TipoT` tinyint NOT NULL,
  `TipoM` tinyint NOT NULL,
  PRIMARY KEY (`nome`),
  UNIQUE KEY `nome_UNIQUE` (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


