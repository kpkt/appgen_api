# Appgen API
Penggunaan AppGen - API Manager dan pembangunan API Service dengan mengggunakan PHP dan MySQL

# Database & Table

Our database and table will be as follow  

```mysql
--
-- Database: `db_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
```

# Directory
Our directory will be as follow  

```html
bootstrap/
   --css/
      --bootstrap.min.css
   --js/
       --bootstrap.min.js
   --fonts/
       --glyphicons-halflings-regular.eot
       --glyphicons-halflings-regular.svg
       --glyphicons-halflings-regular.ttf
       --glyphicons-halflings-regular.woff
```       