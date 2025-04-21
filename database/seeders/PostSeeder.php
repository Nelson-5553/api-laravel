<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tips =[
            [
                'user_id' => 9,
                'title' => 'Empieza el día con gratitud',
                'slug' => 'empieza-el-dia-con-gratitud',
                'content' => 'Dedicar los primeros minutos del día a la gratitud puede transformar tu perspectiva. Antes de revisar el teléfono o levantarte de la cama, piensa en tres cosas por las que estés agradecido. Esta práctica activa el área del cerebro relacionada con el bienestar y programa tu mente para detectar lo positivo durante el resto del día.',
                'category_id' => 4,
            ],
            [
                'user_id' => 7,
                'title' => 'Toma agua apenas despiertes',
                'slug' => 'toma-agua-apenas-despiertes',
                'content' => 'Después de 7-8 horas de sueño, tu cuerpo necesita hidratarse. Beber un vaso de agua al despertar ayuda a activar tus órganos internos, facilita la digestión y prepara tu metabolismo para el día. Mantén un vaso de agua junto a tu cama para convertirlo en un hábito automático antes de hacer cualquier otra actividad.',
                'category_id' => 6,
            ],
            [
                'user_id' => 3,
                'title' => 'Haz la cama todos los días',
                'slug' => 'haz-la-cama-todos-los-dias',
                'content' => 'Hacer la cama es una pequeña victoria que establece el tono para el resto del día. Este simple acto de organización te da una sensación de logro y control sobre tu entorno. Como dijo el almirante William McRaven: "Si quieres cambiar el mundo, comienza haciendo tu cama". Un espacio ordenado contribuye a una mente ordenada.',
                'category_id' => 2,
            ],
            [
                'user_id' => 2,
                'title' => 'Planifica tu día',
                'slug' => 'planifica-tu-dia',
                'content' => 'Dedica 10 minutos cada mañana a planificar tus actividades. Identifica tus tres tareas más importantes y programa bloques específicos de tiempo para completarlas. Esta práctica reduce la ansiedad sobre lo desconocido, minimiza las distracciones y te ayuda a mantener el enfoque en lo verdaderamente prioritario.',
                'category_id' => 3,
            ],
            [
                'user_id' => 2,
                'title' => 'Come frutas en el desayuno',
                'slug' => 'come-frutas-en-el-desayuno',
                'content' => 'Incorporar frutas frescas en tu desayuno aporta vitaminas, minerales y antioxidantes esenciales para comenzar el día con energía. La fructosa natural te brinda un impulso de energía gradual, a diferencia del pico repentino que provocan los azúcares refinados. Además, la fibra de las frutas ayuda a mantener la sensación de saciedad por más tiempo.',
                'category_id' => 4,
            ],
            [
                'user_id' => 7,
                'title' => 'Sal a caminar 20 minutos',
                'slug' => 'sal-a-caminar-20-minutos',
                'content' => 'Una caminata diaria de 20 minutos puede mejorar significativamente tu salud física y mental. Este ejercicio moderado aumenta la circulación sanguínea, libera endorfinas y te conecta con el entorno. Si trabajas en un espacio cerrado, esta pausa al aire libre puede revitalizar tu creatividad y capacidad de concentración.',
                'category_id' => 3,
            ],
            [
                'user_id' => 2,
                'title' => 'Lee al menos una página de un libro',
                'slug' => 'lee-al-menos-una-pagina-de-un-libro',
                'content' => 'Comprometerte a leer al menos una página diaria elimina la barrera psicológica de empezar. A menudo, esa única página se convierte en varias, creando un hábito sostenible. La lectura regular mejora el vocabulario, reduce el estrés y estimula la creatividad. Recuerda que los grandes cambios comienzan con pequeños pasos constantes.',
                'category_id' => 4,
            ],
            [
                'user_id' => 10,
                'title' => 'Respira profundo antes de empezar una tarea',
                'slug' => 'respira-profundo-antes-de-empezar-una-tarea',
                'content' => 'Tomar tres respiraciones profundas antes de iniciar una tarea importante activa tu sistema parasimpático, reduciendo el estrés y mejorando tu capacidad de concentración. Esta breve pausa consciente prepara tu mente para enfocarse y te permite abordar el trabajo desde un estado más centrado y menos reactivo.',
                'category_id' => 5,
            ],
            [
                'user_id' => 4,
                'title' => 'Evita revisar el celular apenas te levantes',
                'slug' => 'evita-revisar-el-celular-apenas-te-levantes',
                'content' => 'Consultar el teléfono al despertar expone tu mente a preocupaciones, noticias negativas y demandas externas antes de que puedas establecer tus propias intenciones para el día. Dale a tu cerebro al menos 30 minutos para despertar completamente antes de sumergirte en el mundo digital. Esto mejora tu claridad mental y reduce la ansiedad matutina.',
                'category_id' => 2,
            ],
            [
                'user_id' => 4,
                'title' => 'Escribe una meta para el día',
                'slug' => 'escribe-una-meta-para-el-dia',
                'content' => 'Definir por escrito un objetivo diario específico aumenta en un 42% la probabilidad de lograrlo. El acto de escribir materializa la intención y activa tanto el pensamiento visual como el lingüístico. Mantén esta meta visible durante el día para recordar tu compromiso y mantener el rumbo cuando surjan distracciones.',
                'category_id' => 6,
            ],
            [
                'user_id' => 2,
                'title' => 'Lleva un diario personal',
                'slug' => 'lleva-un-diario-personal',
                'content' => 'Escribir regularmente en un diario te ayuda a procesar emociones, identificar patrones de pensamiento y clarificar ideas. Dedica 5-10 minutos diarios para reflexionar sobre tus experiencias, aprendizajes o inquietudes. Este hábito fortalece la autoconciencia y proporciona un valioso registro de tu evolución personal a lo largo del tiempo.',
                'category_id' => 6,
            ],
            [
                'user_id' => 8,
                'title' => 'Estira tu cuerpo por la mañana',
                'slug' => 'estira-tu-cuerpo-por-la-manana',
                'content' => 'Un breve rutina matutina de estiramientos despierta tus músculos, mejora la circulación y aumenta la flexibilidad. Dedica 5 minutos a estirar brazos, piernas y espalda para liberar la tensión acumulada durante el sueño. Este ritual físico envía señales a tu cerebro de que es hora de activarse y comenzar el día con energía.',
                'category_id' => 6,
            ],
            [
                'user_id' => 8,
                'title' => 'Desayuna sin pantallas',
                'slug' => 'desayuna-sin-pantallas',
                'content' => 'Comer sin distracciones digitales te permite practicar la alimentación consciente, mejorando la digestión y la satisfacción con tus alimentos. Este momento de desconexión te brinda la oportunidad de comenzar el día centrándote en el presente, apreciando los sabores y nutriendo tu cuerpo con atención plena.',
                'category_id' => 5,
            ],
            [
                'user_id' => 10,
                'title' => 'Prioriza lo importante, no lo urgente',
                'slug' => 'prioriza-lo-importante-no-lo-urgente',
                'content' => 'Siguiendo la matriz de Eisenhower, aprende a distinguir entre tareas urgentes e importantes. Dedicar tiempo a lo importante pero no urgente (planificación, desarrollo personal, prevención) reduce las crisis futuras y genera resultados más significativos a largo plazo. Reserva bloques específicos de tu día para estas actividades valiosas que suelen postergarse.',
                'category_id' => 4,
            ],
            [
                'user_id' => 4,
                'title' => 'Haz pausas activas cada hora',
                'slug' => 'haz-pausas-activas-cada-hora',
                'content' => 'Levantarte y moverte durante 2-3 minutos cada hora mejora la circulación, reduce la fatiga visual y mental, y previene problemas posturales. Estas micropaulas aumentan la productividad hasta un 30% según estudios recientes. Configura una alarma discreta para recordarte este hábito hasta que se vuelva automático.',
                'category_id' => 5,
            ],
            [
                'user_id' => 8,
                'title' => 'Duerme 7-8 horas cada noche',
                'slug' => 'duerme-7-8-horas-cada-noche',
                'content' => 'Un sueño adecuado es fundamental para la consolidación de la memoria, la regulación hormonal y la recuperación física. Establece un horario consistente para acostarte y despertar, incluso los fines de semana. Priorizar el descanso no es un lujo, sino una necesidad biológica que impacta directamente en tu rendimiento y bienestar diario.',
                'category_id' => 3,
            ],
            [
                'user_id' => 7,
                'title' => 'Evita cafeína después de las 5 PM',
                'slug' => 'evita-cafeina-despues-de-las-5-pm',
                'content' => 'La cafeína puede permanecer en tu sistema hasta 8 horas, interfiriendo con la calidad del sueño incluso cuando logras dormirte. Establecer un límite horario para su consumo te permite disfrutar de sus beneficios durante el día sin comprometer tu descanso nocturno. Opta por alternativas como té de hierbas o agua infusionada en las horas vespertinas.',
                'category_id' => 2,
            ],
            [
                'user_id' => 3,
                'title' => 'Ahorra al menos el 10% de tus ingresos',
                'slug' => 'ahorra-al-menos-el-10-de-tus-ingresos',
                'content' => 'Automatizar el ahorro del 10% de cada ingreso construye un hábito financiero saludable sin esfuerzo consciente. Esta práctica, recomendada por expertos como George S. Clason en "El hombre más rico de Babilonia", te proporciona un colchón de seguridad y te encamina hacia la libertad financiera. Lo que no ves en tu cuenta corriente, no lo gastas.',
                'category_id' => 5,
            ],
            [
                'user_id' => 2,
                'title' => 'Revisa tus gastos semanales',
                'slug' => 'revisa-tus-gastos-semanales',
                'content' => 'Dedicar 15 minutos semanales a revisar tus gastos te permite identificar patrones, corregir desviaciones presupuestarias y tomar decisiones informadas. Este hábito de autoconciencia financiera evita sorpresas desagradables a fin de mes y te empodera para ajustar tus comportamientos de consumo alineándolos con tus verdaderas prioridades.',
                'category_id' => 1,
            ],
            [
                'user_id' => 1,
                'title' => 'Prepara tu comida en casa',
                'slug' => 'prepara-tu-comida-en-casa',
                'content' => 'Cocinar en casa no solo reduce significativamente tus gastos alimenticios, sino que te da control total sobre los ingredientes y porciones. Dedica tiempo los fines de semana para preparar comidas básicas de la semana. Esta práctica mejora tu nutrición, desarrolla una habilidad fundamental y puede convertirse en una actividad mindfulness que reduce el estrés.',
                'category_id' => 4,
            ],
            [
                'user_id' => 4,
                'title' => 'Camina si el trayecto es menor a 15 minutos',
                'slug' => 'camina-si-el-trayecto-es-menor-a-15-minutos',
                'content' => 'Optar por caminar en trayectos cortos integra actividad física en tu rutina sin necesidad de tiempo adicional dedicado al ejercicio. Esta práctica reduce tu huella de carbono, ahorra dinero y te permite descubrir detalles de tu entorno que pasarías por alto en un vehículo. Los beneficios se acumulan: 15 minutos diarios suman más de 90 horas de actividad física al año.',
                'category_id' => 4,
            ],
            [
                'user_id' => 1,
                'title' => 'Desconéctate 30 minutos antes de dormir',
                'slug' => 'desconectate-30-minutos-antes-de-dormir',
                'content' => 'La luz azul de las pantallas interfiere con la producción de melatonina, la hormona del sueño. Establecer un período de desconexión digital antes de acostarte mejora la calidad de tu descanso. Sustituye el tiempo frente a pantallas por actividades relajantes como la lectura, estiramientos suaves o meditación para preparar tu cuerpo y mente para un sueño reparador.',
                'category_id' => 1,
            ],
            [
                'user_id' => 9,
                'title' => 'Elige una tarea difícil y hazla primero',
                'slug' => 'elige-una-tarea-dificil-y-hazla-primero',
                'content' => 'Abordar tu tarea más desafiante cuando tu energía y concentración están en su punto máximo aumenta significativamente tus probabilidades de éxito. Esta estrategia, conocida como "comer el sapo" según Brian Tracy, elimina la procrastinación y la ansiedad asociada, permitiéndote afrontar el resto del día con un sentimiento de logro y motivación renovada.',
                'category_id' => 4,
            ],
            [
                'user_id' => 8,
                'title' => 'Aliméntate conscientemente',
                'slug' => 'alimentate-conscientemente',
                'content' => 'Comer con atención plena implica apreciar colores, texturas, aromas y sabores de cada bocado. Esta práctica mejora la digestión, aumenta la satisfacción con porciones más pequeñas y fortalece tu relación con la comida. Intenta comer sin distracciones al menos en una comida diaria, masticando lentamente y reconociendo las sensaciones de hambre y saciedad.',
                'category_id' => 2,
            ],
            [
                'user_id' => 9,
                'title' => 'Escucha un podcast educativo',
                'slug' => 'escucha-un-podcast-educativo',
                'content' => 'Transformar tiempos muertos como desplazamientos o tareas rutinarias en oportunidades de aprendizaje potencia tu crecimiento personal sin requerir tiempo adicional. Los podcasts educativos te permiten acceder a conocimientos de expertos mundiales de forma gratuita. Dedica al menos 15 minutos diarios a esta práctica para mantenerte actualizado y estimular constantemente tu curiosidad intelectual.',
                'category_id' => 4,
            ],
            [
                'user_id' => 9,
                'title' => 'Sonríe, aunque no tengas ganas',
                'slug' => 'sonrie-aunque-no-tengas-ganas',
                'content' => 'La ciencia confirma que el acto físico de sonreír, incluso cuando es forzado, desencadena la liberación de dopamina y serotonina, mejorando instantáneamente tu estado de ánimo. Esta retroalimentación facial-cerebral puede interrumpir ciclos negativos de pensamiento. Practica sonreír intencionalmente varias veces al día, especialmente en momentos de estrés o frustración.',
                'category_id' => 5,
            ],
            [
                'user_id' => 4,
                'title' => 'Haz algo amable por otra persona',
                'slug' => 'haz-algo-amable-por-otra-persona',
                'content' => 'Los actos de bondad activan el centro de recompensa de tu cerebro, generando lo que los científicos llaman "elevación moral". Estas acciones no necesitan ser grandiosas: un mensaje sincero de aprecio, ayudar con una tarea pequeña o compartir un recurso valioso. El altruismo regular está vinculado con mayor longevidad, menor depresión y fortalecimiento del sistema inmunológico.',
                'category_id' => 5,
            ],
            [
                'user_id' => 6,
                'title' => 'Evita compararte con otros',
                'slug' => 'evita-compararte-con-otros',
                'content' => 'La comparación constante con los demás es un ladrón silencioso de la alegría y la autoestima. Recuerda que percibes solo fragmentos cuidadosamente seleccionados de la vida de otros, especialmente en redes sociales. Redirige esa energía hacia la comparación con tu yo anterior, celebrando tu progreso personal y estableciendo metas alineadas con tus valores únicos.',
                'category_id' => 4,
            ],
            [
                'user_id' => 4,
                'title' => 'Establece límites claros con el trabajo',
                'slug' => 'establece-limites-claros-con-el-trabajo',
                'content' => 'Definir horarios específicos para comenzar y terminar tu jornada laboral previene el agotamiento y protege tu vida personal. Comunica estos límites claramente a colegas y supervisores. Recuerda que la productividad sostenible depende de la renovación regular de energía, y que tu valor no se define por tu disponibilidad perpetua ni por el volumen de trabajo que asumes.',
                'category_id' => 2,
            ],
            [
                'user_id' => 6,
                'title' => 'Haz una limpieza digital',
                'slug' => 'haz-una-limpieza-digital',
                'content' => 'El desorden digital genera la misma ansiedad que el físico pero de forma menos visible. Dedica 10 minutos diarios a organizar archivos, borrar correos innecesarios o desinstalar aplicaciones sin uso. Esta práctica mejora el rendimiento de tus dispositivos y reduce la sobrecarga cognitiva asociada con la acumulación digital, permitiéndote encontrar lo que necesitas cuando lo necesitas.',
                'category_id' => 3,
            ],
            [
                'user_id' => 5,
                'title' => 'Cambia contraseñas con regularidad',
                'slug' => 'cambia-contrasenas-con-regularidad',
                'content' => 'Actualizar tus contraseñas cada 90 días es una medida preventiva esencial contra el acceso no autorizado a tus cuentas. Utiliza un gestor de contraseñas para crear y almacenar combinaciones únicas y complejas sin necesidad de memorizarlas. Esta sencilla rutina de seguridad puede ahorrarte graves problemas de privacidad, identidad y pérdidas financieras.',
                'category_id' => 5,
            ],
            [
                'user_id' => 3,
                'title' => 'Haz copias de seguridad de tus archivos',
                'slug' => 'haz-copias-de-seguridad-de-tus-archivos',
                'content' => 'Siguiendo la regla 3-2-1, mantén tres copias de tus datos importantes, en dos tipos diferentes de almacenamiento, con una copia fuera de tu ubicación física. Automatiza este proceso cuando sea posible. Esta práctica preventiva te protege contra pérdidas irreversibles por fallos tecnológicos, errores humanos, desastres naturales o ciberataques.',
                'category_id' => 6,
            ],
            [
                'user_id' => 9,
                'title' => 'Aprende un atajo de teclado nuevo',
                'slug' => 'aprende-un-atajo-de-teclado-nuevo',
                'content' => 'Dominar atajos de teclado puede aumentar tu productividad digital hasta en un 30%. Comprométete a aprender uno nuevo cada semana y practicarlo hasta que se vuelva automático. Estos pequeños incrementos de eficiencia se acumulan significativamente a lo largo del tiempo, permitiéndote completar tareas con mayor fluidez y menos fatiga mental.',
                'category_id' => 5,
            ],
            [
                'user_id' => 2,
                'title' => 'Usa la verificación en dos pasos',
                'slug' => 'usa-la-verificacion-en-dos-pasos',
                'content' => 'Activar la autenticación de dos factores en tus cuentas importantes añade una capa crucial de seguridad, reduciendo drásticamente el riesgo de accesos no autorizados incluso si tu contraseña es comprometida. Este paso adicional de verificación, que puede ser un código temporal o una confirmación en otro dispositivo, es una inversión mínima de tiempo con beneficios enormes para tu seguridad digital.',
                'category_id' => 5,
            ],
            [
                'user_id' => 7,
                'title' => 'Actualiza tus aplicaciones',
                'slug' => 'actualiza-tus-aplicaciones',
                'content' => 'Mantener tus aplicaciones y sistemas operativos actualizados es fundamental para protegerte contra vulnerabilidades de seguridad conocidas. Configura actualizaciones automáticas cuando sea posible o establece un recordatorio semanal para revisarlas manualmente. Este hábito simple no solo mejora tu seguridad digital sino que también te da acceso a nuevas funcionalidades y correcciones de errores.',
                'category_id' => 3,
            ],
            [
                'user_id' => 10,
                'title' => 'Crea una lista de cosas pendientes',
                'slug' => 'crea-una-lista-de-cosas-pendientes',
                'content' => 'Externalizar tus tareas en una lista libera capacidad mental que de otro modo estaría ocupada intentando recordarlas. Este sistema confiable reduce la ansiedad relacionada con el olvido y te permite priorizar conscientemente. Revisa y actualiza esta lista diariamente, preferiblemente la noche anterior, para comenzar cada mañana con claridad sobre tus objetivos.',
                'category_id' => 6,
            ],
            [
                'user_id' => 4,
                'title' => 'Elimina una app que no uses',
                'slug' => 'elimina-una-app-que-no-uses',
                'content' => 'El minimalismo digital reduce las distracciones y mejora el rendimiento de tus dispositivos. Revisa regularmente tus aplicaciones y desinstala aquellas que no has utilizado en los últimos 30 días. Esta práctica no solo libera espacio de almacenamiento sino que simplifica tus opciones, reduciendo la fatiga decisional y ayudándote a enfocarte en las herramientas realmente valiosas.',
                'category_id' => 6,
            ],
            [
                'user_id' => 2,
                'title' => 'Desactiva notificaciones innecesarias',
                'slug' => 'desactiva-notificaciones-innecesarias',
                'content' => 'Cada notificación que interrumpe tu concentración requiere aproximadamente 23 minutos para recuperar el enfoque completo. Revisa y desactiva las alertas no esenciales, especialmente de redes sociales y noticias. Conserva solo aquellas verdaderamente urgentes o importantes. Este ajuste simple puede aumentar significativamente tu productividad y reducir los niveles de estrés y ansiedad.',
                'category_id' => 1,
            ],
            [
                'user_id' => 1,
                'title' => 'Medita 5 minutos al día',
                'slug' => 'medita-5-minutos-al-dia',
                'content' => 'La meditación breve pero regular fortalece las conexiones neuronales relacionadas con la atención y el control emocional. Comienza con solo 5 minutos diarios, enfocándote en tu respiración y volviendo gentilmente a ella cada vez que tu mente divague. Esta práctica sencilla pero poderosa reduce el estrés, mejora la claridad mental y aumenta la capacidad de responder en lugar de reaccionar.',
                'category_id' => 2,
            ],
            [
                'user_id' => 6,
                'title' => 'Escucha música relajante mientras trabajas',
                'slug' => 'escucha-musica-relajante-mientras-trabajas',
                'content' => 'La música instrumental a un volumen moderado puede mejorar la concentración y productividad hasta en un 15%, especialmente en entornos ruidosos. Géneros como música clásica, jazz ambiental o sonidos naturales sin letra evitan la distracción cognitiva del procesamiento verbal. Crea listas específicas para diferentes tipos de tareas y observa cuáles optimizan tu rendimiento personal.',
                'category_id' => 6,
            ],
            [
                'user_id' => 3,
                'title' => 'Haz contacto visual al hablar',
                'slug' => 'haz-contacto-visual-al-hablar',
                'content' => 'Mantener un contacto visual apropiado durante las conversaciones transmite confianza, atención genuina y respeto. Esta habilidad fundamental de comunicación aumenta la retención de información y fortalece las conexiones interpersonales. Practica conscientemente mantener el contacto visual durante 4-5 segundos antes de hacer una pausa natural, evitando tanto la mirada fija intimidante como la evasiva.',
                'category_id' => 2,
            ],
            [
                'user_id' => 10,
                'title' => 'Llama a alguien que aprecias',
                'slug' => 'llama-a-alguien-que-aprecias',
                'content' => 'En la era de los mensajes de texto, una llamada telefónica se ha convertido en un gesto significativo de conexión. Dedica 10 minutos a llamar a un ser querido sin un propósito específico, solo para preguntar cómo está. Este contacto vocal directo fortalece los vínculos sociales de manera que los mensajes escritos no pueden igualar, beneficiando tanto tu bienestar emocional como el de la otra persona.',
                'category_id' => 5,
            ],
            [
                'user_id' => 2,
                'title' => 'Define un presupuesto mensual',
                'slug' => 'define-un-presupuesto-mensual',
                'content' => 'Un presupuesto no es una restricción sino una herramienta de libertad financiera que alinea tu dinero con tus verdaderos valores y objetivos. Dedica tiempo al inicio de cada mes para planificar ingresos y gastos por categorías. Este plan consciente elimina la culpa asociada a los gastos planificados y te alerta tempranamente sobre desviaciones, permitiéndote hacer ajustes proactivos en lugar de reacciones de emergencia.',
                'category_id' => 1,
            ],
            [
                'user_id' => 6,
                'title' => 'Revisa tus suscripciones activas',
                'slug' => 'revisa-tus-suscripciones-activas',
                'content' => 'El modelo de negocio de suscripción aprovecha nuestra tendencia a olvidar pagos automáticos pequeños pero recurrentes. Mensualmente, revisa todos tus servicios de suscripción y cuestiona cuáles aportan valor real a tu vida. Esta auditoría regular puede descubrir "fugas" financieras sorprendentes: el usuario promedio gasta hasta 40% más en suscripciones de lo que estima.',
                'category_id' => 5,
            ],
            [
                'user_id' => 9,
                'title' => 'Define un horario fijo para tus comidas',
                'slug' => 'define-un-horario-fijo-para-tus-comidas',
                'content' => 'Establecer un horario regular para tus comidas sincroniza tus ritmos circadianos y optimiza la función metabólica. Esta estructura ayuda a prevenir el picoteo impulsivo y facilita la digestión adecuada. Intenta mantener un intervalo consistente entre comidas, idealmente con la cena al menos 3 horas antes de acostarte para permitir una digestión completa antes del descanso nocturno.',
                'category_id' => 3,
            ],
            [
                'user_id' => 2,
                'title' => 'Evita multitareas, concéntrate en una sola cosa',
                'slug' => 'evita-multitareas-concentrate-en-una-sola-cosa',
                'content' => 'Las investigaciones demuestran que el cerebro humano no hace verdadero multitasking, sino que cambia rápidamente entre tareas con un costo cognitivo alto. Este cambio constante reduce hasta un 40% la productividad y aumenta los errores. Practica la monotarea: cierra las pestañas irrelevantes, silencia notificaciones y dedica bloques de tiempo enfocados a una sola actividad antes de pasar a la siguiente.',
                'category_id' => 5,
            ],
            [
                'user_id' => 5,
                'title' => 'Aprende algo nuevo cada día',
                'slug' => 'aprende-algo-nuevo-cada-dia',
                'content' => 'Dedica al menos 10 minutos diarios a aprender algo nuevo, ya sea un concepto, una habilidad o un dato interesante. Este hábito estimula tu curiosidad, mejora tu memoria y te mantiene mentalmente activo. Usa recursos como libros, videos educativos o aplicaciones de aprendizaje.',
                'category_id' => 4,
            ],
            [
                'user_id' => 7,
                'title' => 'Organiza tu espacio de trabajo',
                'slug' => 'organiza-tu-espacio-de-trabajo',
                'content' => 'Un espacio de trabajo limpio y ordenado mejora tu enfoque y productividad. Dedica unos minutos al final de cada jornada para organizar tu escritorio, eliminar el desorden y preparar todo lo necesario para el día siguiente.',
                'category_id' => 3,
            ],
            [
                'user_id' => 3,
                'title' => 'Practica la gratitud antes de dormir',
                'slug' => 'practica-la-gratitud-antes-de-dormir',
                'content' => 'Antes de acostarte, reflexiona sobre tres cosas por las que estés agradecido ese día. Este hábito mejora tu bienestar emocional, reduce el estrés y te ayuda a terminar el día con una nota positiva.',
                'category_id' => 6,
            ],
            [
                'user_id' => 8,
                'title' => 'Haz ejercicio ligero en casa',
                'slug' => 'haz-ejercicio-ligero-en-casa',
                'content' => 'Realizar ejercicios ligeros como estiramientos, yoga o pilates en casa mejora tu flexibilidad, reduce el estrés y fortalece tu cuerpo. Dedica al menos 15 minutos diarios a esta práctica para mantenerte activo.',
                'category_id' => 2,
            ],
            [
                'user_id' => 6,
                'title' => 'Desactiva el modo multitarea en tu vida',
                'slug' => 'desactiva-el-modo-multitarea-en-tu-vida',
                'content' => 'Enfócate en una tarea a la vez para mejorar tu productividad y reducir el estrés. Usa técnicas como el método Pomodoro para trabajar en bloques de tiempo enfocados y tomar descansos regulares.',
                'category_id' => 5,
            ],
            

    ];

        foreach ($tips as $tip) {
           Post::create([
                'user_id' => $tip['user_id'],
                'title' => $tip['title'],
                'slug' => $tip['slug'],
                'content' => $tip['content'],
                'category_id' => $tip['category_id'],
            ]);
        }
    }
}
