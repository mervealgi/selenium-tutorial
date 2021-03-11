import org.junit.After;
import org.junit.Before;
import org.junit.Test;

public class xpath{

    WebDriver driver;
    private final String BASE_URL = "http://localhost/tablo.php" ;

    @Before
    public void setUp(){
        System.setProperty("webdriver.chrome.driver","src/test/resources/drivers/chromedriver.exe")
        driver = new ChromeDriver();
    }

    @Test
    public void test(){
        driver.get(BASE_URL);
        driver.findElement(By.xpath("/html/body/div[1]/div/table/tbody/tr[3]"));
    }

    @After
    public void tearDown(){
        driver.quit();
    }
}