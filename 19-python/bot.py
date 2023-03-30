from selenium import webdriver
from selenium.common.exceptions import NoSuchElementException
import time

options = webdriver.ChromeOptions()
options.add_experimental_options("excludeSwitches", ["enable-loggin"])
driver = webdriver.Chrome(options=options, executable_path=r'chromedriver.exe')
driver.maximize_window()
driver.get('https://www.google.com')

google_input = '/html/body/div[1]/div[3]/form/div[1]/div[1]/div[1]/div/div[2]/input'
google_boton = '/html/body/div[1]/div[3]/form/div[1]/div[1]/div[4]/center/input[1]'
google_logo = '/html/body/div[1]/div[2]/div/img'
primer_link_result = '/html/body/div[7]/div/div[10]/div[1]/div[2]/div[2]/div/div/div[1]/div/div/div/div/div/div/div/div[1]/a'

busqueda = 'youtube'

try:
    time.sleep(3)
    driver.find_element('xpath', google_input).send_keys(busqueda)
    time.sleep(3)
    driver.find_element('xpath', google_boton).click()
    time.sleep(10)
    print(driver.find_element('xpath', primer_link_result))
except:
    print('Ocurrio un error')

