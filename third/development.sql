-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Дек 22 2023 г., 02:34
-- Версия сервера: 5.7.24
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `development`
--

-- --------------------------------------------------------

--
-- Структура таблицы `num1`
--

CREATE TABLE `num1` (
  `id` int(11) NOT NULL,
  `1` text NOT NULL,
  `2` text NOT NULL,
  `3` text NOT NULL,
  `4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `num1`
--

INSERT INTO `num1` (`id`, `1`, `2`, `3`, `4`) VALUES
(1, 'Луна сверкала на небесах, словно потерянный алмаз в черном бархате ночи.', 'Шепот ветра в листве создавал мелодию, которая звучала как песня самой природы.', 'Сердце билось так быстро, что казалось, будто оно пыталось догнать ускользающее время.', 'Тени танцевали на стенах, рассказывая свои тайные истории, пряча в себе загадки прошлого.');

-- --------------------------------------------------------

--
-- Структура таблицы `num2`
--

CREATE TABLE `num2` (
  `id` int(11) NOT NULL,
  `1` text NOT NULL,
  `2` text NOT NULL,
  `3` text NOT NULL,
  `4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `num2`
--

INSERT INTO `num2` (`id`, `1`, `2`, `3`, `4`) VALUES
(1, 'На вершине горы ветер шептал свои тайны, рассказывая истории, утерянные в веках.', 'Старинные часы на стене тикали, будто сердце времени, отмеряющее судьбы людей.', 'В темном лесу ветви деревьев создавали лабиринт, в котором каждый шорох казался шепотом духов природы.', 'Звезды были как огоньки на покрывале ночи, мерцая в бескрайнем космосе.');

-- --------------------------------------------------------

--
-- Структура таблицы `num3`
--

CREATE TABLE `num3` (
  `id` int(11) NOT NULL,
  `1` text NOT NULL,
  `2` text NOT NULL,
  `3` text NOT NULL,
  `4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `num3`
--

INSERT INTO `num3` (`id`, `1`, `2`, `3`, `4`) VALUES
(1, 'Запах дождя наполнял воздух, пробуждая землю к жизни после засушливых дней.', 'Словно волшебная паутина, нить судьбы тянулась между нами, создавая невидимую связь.', 'Старый маяк молча стоял на мысе, словно страж, охраняющий тайны моря.', 'В тени деревьев скрывались фантастические миры, доступные лишь тем, кто верит в чудеса.');

-- --------------------------------------------------------

--
-- Структура таблицы `num4`
--

CREATE TABLE `num4` (
  `id` int(11) NOT NULL,
  `1` text NOT NULL,
  `2` text NOT NULL,
  `3` text NOT NULL,
  `4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `num4`
--

INSERT INTO `num4` (`id`, `1`, `2`, `3`, `4`) VALUES
(1, 'Слова падали с страницы книги, словно дождевые капли, наполняя мир воображением.', 'Серебристая луна освещала ночное небо, словно волшебный фонарь, освещающий путь в неизведанные миры.', 'На полях весенний ветер танцевал с цветами, распространяя аромат свежести и обновления.', 'Стеклянные окна отражали свет фонарей, создавая мозаичный узор на асфальте городской улицы.');

-- --------------------------------------------------------

--
-- Структура таблицы `num5`
--

CREATE TABLE `num5` (
  `id` int(11) NOT NULL,
  `1` text NOT NULL,
  `2` text NOT NULL,
  `3` text NOT NULL,
  `4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `num5`
--

INSERT INTO `num5` (`id`, `1`, `2`, `3`, `4`) VALUES
(1, 'Словно перо, ветер летел над полем, несущее с собой тайны далеких стран и неведомых приключений.', 'Звезды на небесах сверкали как искры в вечернем огне, рассказывая свои собственные истории вечности.', 'Тень старого фонаря рисовала на стене кафе древние узоры, словно времени памятные следы.', 'В оживленном городе машины двигались как метеориты, оставляя за собой световой след в ночном тумане.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `num1`
--
ALTER TABLE `num1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `num2`
--
ALTER TABLE `num2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `num3`
--
ALTER TABLE `num3`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `num4`
--
ALTER TABLE `num4`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `num5`
--
ALTER TABLE `num5`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `num1`
--
ALTER TABLE `num1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `num2`
--
ALTER TABLE `num2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `num3`
--
ALTER TABLE `num3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `num4`
--
ALTER TABLE `num4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `num5`
--
ALTER TABLE `num5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
