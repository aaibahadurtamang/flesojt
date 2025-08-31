-- Bookings table
CREATE TABLE IF NOT EXISTS bookings (
  id INT AUTO_INCREMENT PRIMARY KEY,
  customer_id INT,
  destination VARCHAR(255),
  date DATE,
  status VARCHAR(50)
);

-- Users table
CREATE TABLE IF NOT EXISTS users3 (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  mobile VARCHAR(20)
);

-- Messages table
CREATE TABLE IF NOT EXISTS messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  from_user INT,
  subject VARCHAR(255),
  message TEXT,
  date DATE
);
