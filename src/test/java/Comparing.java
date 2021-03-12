import org.junit.After;
import org.junit.Assert;
import org.junit.Test;
import org.junit.Before;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

import java.sql.Driver;

public class Comparing {
    WebDriver driver;
    private final String BASE_URL = "http://localhost/tiklabana.php";

    @Before
    public void setUp(){
        System.setProperty("webdriver.chrome.driver","src/test/resources/drivers/chromedriver.exe");
        driver = new ChromeDriver();

    }

    @Test
    public void test(){
        driver.get(BASE_URL);
        //System.out.print(driver.findElement(By.id("clicks")).getText());
        Assert.assertEquals("0",driver.findElement(By.id("clicks")).getText());
        driver.findElement(By.id("clickMe")).click();
    }

    @After
    public void tearDown(){

    }


}
