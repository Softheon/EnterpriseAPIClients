/**
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

package softheon.enterprise.api.client.models;

import org.joda.time.DateTime;
import java.util.List;
import com.fasterxml.jackson.annotation.JsonProperty;

/**
 * Model for entity templates.
 */
public class EntityDefinitionModel {
    /**
     * Gets or sets the identifier.
     */
    @JsonProperty(value = "ID")
    private String id;

    /**
     * Gets or sets the creation time.
     */
    @JsonProperty(value = "CreationTime")
    private DateTime creationTime;

    /**
     * Gets or sets the modification time.
     */
    @JsonProperty(value = "ModificationTime")
    private DateTime modificationTime;

    /**
     * Gets or sets the type of template.
     */
    @JsonProperty(value = "Type", required = true)
    private int type;

    /**
     * Gets or sets the category of template.
     */
    @JsonProperty(value = "Category", required = true)
    private String category;

    /**
     * Gets or sets the name of template.
     */
    @JsonProperty(value = "Name", required = true)
    private String name;

    /**
     * Gets or sets if the template has classes.
     */
    @JsonProperty(value = "HasClass")
    private Boolean hasClass;

    /**
     * Gets or sets if the template has security.
     */
    @JsonProperty(value = "HasSecurity")
    private Boolean hasSecurity;

    /**
     * Gets or sets if the template has profiles.
     */
    @JsonProperty(value = "HasProfiles")
    private Boolean hasProfiles;

    /**
     * Gets or sets the has items.
     */
    @JsonProperty(value = "HasItems")
    private Boolean hasItems;

    /**
     * Gets or sets the small image.
     */
    @JsonProperty(value = "SmallImage")
    private String smallImage;

    /**
     * Gets or sets the large image.
     */
    @JsonProperty(value = "LargeImage")
    private String largeImage;

    /**
     * Gets or sets if the template has auditing enabled.
     */
    @JsonProperty(value = "HasAudit")
    private Boolean hasAudit;

    /**
     * Gets or sets if the template allows viewing images.
     */
    @JsonProperty(value = "AllowsViewImages")
    private Boolean allowsViewImages;

    /**
     * Gets or sets if the entity is created in a review state.
     */
    @JsonProperty(value = "IsReviewState")
    private Boolean isReviewState;

    /**
     * Gets or sets the reserved string1.
     */
    @JsonProperty(value = "ReservedString1")
    private String reservedString1;

    /**
     * Gets or sets the reserved string2.
     */
    @JsonProperty(value = "ReservedString2")
    private String reservedString2;

    /**
     * Gets or sets the reserved int1.
     */
    @JsonProperty(value = "ReservedInt1")
    private Integer reservedInt1;

    /**
     * Gets or sets the reserved int2.
     */
    @JsonProperty(value = "ReservedInt2")
    private Integer reservedInt2;

    /**
     * Gets or sets the drawers.
     */
    @JsonProperty(value = "Drawers")
    private List<Integer> drawers;

    /**
     * Gets or sets the profiles.
     */
    @JsonProperty(value = "Profiles")
    private List<ProfileDefinitionModel> profiles;

    /**
     * Get the id value.
     *
     * @return the id value
     */
    public String id() {
        return this.id;
    }

    /**
     * Set the id value.
     *
     * @param id the id value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withId(String id) {
        this.id = id;
        return this;
    }

    /**
     * Get the creationTime value.
     *
     * @return the creationTime value
     */
    public DateTime creationTime() {
        return this.creationTime;
    }

    /**
     * Set the creationTime value.
     *
     * @param creationTime the creationTime value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withCreationTime(DateTime creationTime) {
        this.creationTime = creationTime;
        return this;
    }

    /**
     * Get the modificationTime value.
     *
     * @return the modificationTime value
     */
    public DateTime modificationTime() {
        return this.modificationTime;
    }

    /**
     * Set the modificationTime value.
     *
     * @param modificationTime the modificationTime value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withModificationTime(DateTime modificationTime) {
        this.modificationTime = modificationTime;
        return this;
    }

    /**
     * Get the type value.
     *
     * @return the type value
     */
    public int type() {
        return this.type;
    }

    /**
     * Set the type value.
     *
     * @param type the type value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withType(int type) {
        this.type = type;
        return this;
    }

    /**
     * Get the category value.
     *
     * @return the category value
     */
    public String category() {
        return this.category;
    }

    /**
     * Set the category value.
     *
     * @param category the category value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withCategory(String category) {
        this.category = category;
        return this;
    }

    /**
     * Get the name value.
     *
     * @return the name value
     */
    public String name() {
        return this.name;
    }

    /**
     * Set the name value.
     *
     * @param name the name value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withName(String name) {
        this.name = name;
        return this;
    }

    /**
     * Get the hasClass value.
     *
     * @return the hasClass value
     */
    public Boolean hasClass() {
        return this.hasClass;
    }

    /**
     * Set the hasClass value.
     *
     * @param hasClass the hasClass value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withHasClass(Boolean hasClass) {
        this.hasClass = hasClass;
        return this;
    }

    /**
     * Get the hasSecurity value.
     *
     * @return the hasSecurity value
     */
    public Boolean hasSecurity() {
        return this.hasSecurity;
    }

    /**
     * Set the hasSecurity value.
     *
     * @param hasSecurity the hasSecurity value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withHasSecurity(Boolean hasSecurity) {
        this.hasSecurity = hasSecurity;
        return this;
    }

    /**
     * Get the hasProfiles value.
     *
     * @return the hasProfiles value
     */
    public Boolean hasProfiles() {
        return this.hasProfiles;
    }

    /**
     * Set the hasProfiles value.
     *
     * @param hasProfiles the hasProfiles value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withHasProfiles(Boolean hasProfiles) {
        this.hasProfiles = hasProfiles;
        return this;
    }

    /**
     * Get the hasItems value.
     *
     * @return the hasItems value
     */
    public Boolean hasItems() {
        return this.hasItems;
    }

    /**
     * Set the hasItems value.
     *
     * @param hasItems the hasItems value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withHasItems(Boolean hasItems) {
        this.hasItems = hasItems;
        return this;
    }

    /**
     * Get the smallImage value.
     *
     * @return the smallImage value
     */
    public String smallImage() {
        return this.smallImage;
    }

    /**
     * Set the smallImage value.
     *
     * @param smallImage the smallImage value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withSmallImage(String smallImage) {
        this.smallImage = smallImage;
        return this;
    }

    /**
     * Get the largeImage value.
     *
     * @return the largeImage value
     */
    public String largeImage() {
        return this.largeImage;
    }

    /**
     * Set the largeImage value.
     *
     * @param largeImage the largeImage value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withLargeImage(String largeImage) {
        this.largeImage = largeImage;
        return this;
    }

    /**
     * Get the hasAudit value.
     *
     * @return the hasAudit value
     */
    public Boolean hasAudit() {
        return this.hasAudit;
    }

    /**
     * Set the hasAudit value.
     *
     * @param hasAudit the hasAudit value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withHasAudit(Boolean hasAudit) {
        this.hasAudit = hasAudit;
        return this;
    }

    /**
     * Get the allowsViewImages value.
     *
     * @return the allowsViewImages value
     */
    public Boolean allowsViewImages() {
        return this.allowsViewImages;
    }

    /**
     * Set the allowsViewImages value.
     *
     * @param allowsViewImages the allowsViewImages value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withAllowsViewImages(Boolean allowsViewImages) {
        this.allowsViewImages = allowsViewImages;
        return this;
    }

    /**
     * Get the isReviewState value.
     *
     * @return the isReviewState value
     */
    public Boolean isReviewState() {
        return this.isReviewState;
    }

    /**
     * Set the isReviewState value.
     *
     * @param isReviewState the isReviewState value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withIsReviewState(Boolean isReviewState) {
        this.isReviewState = isReviewState;
        return this;
    }

    /**
     * Get the reservedString1 value.
     *
     * @return the reservedString1 value
     */
    public String reservedString1() {
        return this.reservedString1;
    }

    /**
     * Set the reservedString1 value.
     *
     * @param reservedString1 the reservedString1 value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withReservedString1(String reservedString1) {
        this.reservedString1 = reservedString1;
        return this;
    }

    /**
     * Get the reservedString2 value.
     *
     * @return the reservedString2 value
     */
    public String reservedString2() {
        return this.reservedString2;
    }

    /**
     * Set the reservedString2 value.
     *
     * @param reservedString2 the reservedString2 value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withReservedString2(String reservedString2) {
        this.reservedString2 = reservedString2;
        return this;
    }

    /**
     * Get the reservedInt1 value.
     *
     * @return the reservedInt1 value
     */
    public Integer reservedInt1() {
        return this.reservedInt1;
    }

    /**
     * Set the reservedInt1 value.
     *
     * @param reservedInt1 the reservedInt1 value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withReservedInt1(Integer reservedInt1) {
        this.reservedInt1 = reservedInt1;
        return this;
    }

    /**
     * Get the reservedInt2 value.
     *
     * @return the reservedInt2 value
     */
    public Integer reservedInt2() {
        return this.reservedInt2;
    }

    /**
     * Set the reservedInt2 value.
     *
     * @param reservedInt2 the reservedInt2 value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withReservedInt2(Integer reservedInt2) {
        this.reservedInt2 = reservedInt2;
        return this;
    }

    /**
     * Get the drawers value.
     *
     * @return the drawers value
     */
    public List<Integer> drawers() {
        return this.drawers;
    }

    /**
     * Set the drawers value.
     *
     * @param drawers the drawers value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withDrawers(List<Integer> drawers) {
        this.drawers = drawers;
        return this;
    }

    /**
     * Get the profiles value.
     *
     * @return the profiles value
     */
    public List<ProfileDefinitionModel> profiles() {
        return this.profiles;
    }

    /**
     * Set the profiles value.
     *
     * @param profiles the profiles value to set
     * @return the EntityDefinitionModel object itself.
     */
    public EntityDefinitionModel withProfiles(List<ProfileDefinitionModel> profiles) {
        this.profiles = profiles;
        return this;
    }

}