class Product < ActiveRecord::Base
  attr_accessible :description, :price, :title

  validates_presence_of :title, :price, :description
  validates_numericality_of :price, :less_than => 5000, :greater_than => 0

end
